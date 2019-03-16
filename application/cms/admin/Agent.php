<?php

namespace app\cms\admin;

use app\admin\controller\Admin;
use app\common\builder\ZBuilder;
use app\cms\model\Agent as AgentModel;
use app\cms\model\Apply as ApplyModel;
use app\cms\model\Member as MemberModel;
use app\user\model\User as UserModel;
use app\user\model\Role as RoleModel;
use think\Hook;

class Agent extends Admin
{
    public function index()
    {
        // 数据列表
        $data_list = AgentModel::where($this->getMap())
            ->order($this->getOrder('id ASC'))
            ->paginate();
        // 分页数据
        $page = $data_list->render();


        // 使用ZBuilder快速创建数据表格
        return ZBuilder::make('table')
            ->setSearch(['nickname' => '渠道名称'])// 设置搜索框
            ->addColumns([ // 批量添加数据列
                ['username', '用户名', 'text'],
                ['nickname', '渠道名', 'text'],
                ['id', '链接', 'callback', function($value, $data){
                    return $this->request->domain()."?aid=".$value;
                }, '__data__'],
                ['create_time', '创建时间', 'datetime'],
                ['right_button', '操作', 'btn']
            ])
            ->addTopButtons('add,delete')// 批量添加顶部按钮
            ->addTimeFilter('create_time')
            ->addRightButtons(['delete'])
            ->setRowList($data_list)// 设置表格数据
            ->setPages($page)
            ->fetch(); // 渲染模板
    }


    public function statistics(){
        // 数据列表
        
      $a = ApplyModel::view(['dp_apply'=>'a'], true)
        ->view('cms_agent', ['nickname','count(a.agent_id)'=>'browse'], 'cms_agent.id=a.agent_id')
        ->where($this->getMap())
        ->where('cms_agent.nickname','not null')
        ->group('cms_agent.id')
        ->select();
      $b = MemberModel::view(['dp_cms_user'=>'a'], true)
        ->view('cms_agent', ['nickname','count(a.agent_id)'=> 'register'], 'a.agent_id=cms_agent.id')
        ->where($this->getMap())
        ->where('cms_agent.nickname','not null')
        ->group('cms_agent.id')
        ->select();
      
      
      $temp = array();
      
      foreach ($a as $k=>$v){
        foreach($b as $kay=>$val){
         	if($v['nickname'] == $val['nickname']){
              $temp[$k]['nickname'] = $v['nickname'];
              $temp[$k]['register'] = $val['register'];
              $temp[$k]['browse'] = $v['browse'];
            }
        }
      }
      
      
      
        $excelBtn = [
            'title' => '导出数据',
            'icon'  => 'fa fa-fw fa-download',
            'href'  => url('excel')
        ];

        // 使用ZBuilder快速创建数据表格
        return ZBuilder::make('table')
            ->setSearch(['nickname' => '渠道名称'])// 设置搜索框
            ->addColumns([ // 批量添加数据列
                ['nickname', '渠道名', 'text'],
                ['browse', '访问次数 ', 'text'],
                ['register', '注册量 ', 'text'],
            ])
            ->addTimeFilter('a.create_time')
            ->addTopButton('custom',$excelBtn)
            ->setRowList($temp)// 设置表格数据
            ->fetch(); // 渲染模板
    }

    public function excel(){
        $a = ApplyModel::view('apply', true)
        ->view('cms_agent', ['nickname','count(apply.agent_id)'=>'browse'], 'cms_agent.id=apply.agent_id')
        ->where($this->getMap())
        ->where('cms_agent.nickname','not null')
        ->group('cms_agent.id')
        ->select();
      $b = MemberModel::view('cms_user', true)
        ->view('cms_agent', ['nickname','count(cms_user.agent_id)'=> 'register'], 'cms_user.agent_id=cms_agent.id')
        ->where($this->getMap())
        ->where('cms_agent.nickname','not null')
        ->group('cms_agent.id')
        ->select();
      
  
      $temp = array();
      
      foreach ($a as $k=>$v){
        foreach($b as $kay=>$val){
         	if($v['nickname'] == $val['nickname']){
              $temp[$k]['nickname'] = $v['nickname'];
              $temp[$k]['register'] = $val['register'];
              $temp[$k]['browse'] = $v['browse'];
            }
        }
      }
        // 设置表头信息（对应字段名,宽度，显示表头名称）
        $cellName = [
            ['nickname', 'auto', '渠道名'],
            ['browse', 'auto', '访问次数'],
            ['register', 'auto', '注册量'],
        ];
        // 调用插件（传入插件名，[导出文件名、表头信息、具体数据]）
        plugin_action('Excel/Excel/export', ['test', $cellName, $temp]);
    }


    public function add()
    {
        // 保存数据
        if ($this->request->isPost()) {
            $data = $this->request->post();
            // 验证
            $result = $this->validate($data, 'app\user\validate\User');
            // 验证失败 输出错误信息
            if(true !== $result) $this->error($result);

            // 非超级管理需要验证可选择角色
            if (session('user_auth.role') != 1) {
                if ($data['role'] == session('user_auth.role')) {
                    $this->error('禁止创建与当前角色同级的用户');
                }
                $role_list = RoleModel::getChildsId(session('user_auth.role'));
                if (!in_array($data['role'], $role_list)) {
                    $this->error('权限不足，禁止创建非法角色的用户');
                }
            }

            if ($user = UserModel::create($data)) {
                Hook::listen('user_add', $user);
                // 记录行为
                action_log('user_add', 'admin_user', $user['id'], UID);

                if ($link = AgentModel::create($data,true)) {
                    // 记录行为
                    $this->success('新增成功', url('index'));
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error('新增失败');
            }
        }

        // 角色列表
        if (session('user_auth.role') != 1) {
            $role_list = RoleModel::getTree(null, false, session('user_auth.role'));
        } else {
            $role_list = RoleModel::getTree(null, false);
        }

        // 使用ZBuilder快速创建表单
        return ZBuilder::make('form')
            ->setPageTitle('新增') // 设置页面标题
            ->addFormItems([ // 批量添加表单项
                ['text', 'username', '用户名', '必填，可由英文字母、数字组成'],
                ['text', 'nickname', '渠道名（昵称）','可以是中文'],
                ['select', 'role', '角色', '非超级管理员，禁止创建与当前角色同级的用户', $role_list],
                ['text', 'email', '邮箱', ''],
                ['password', 'password', '密码', '必填，6-20位'],
                ['text', 'mobile', '手机号'],
                ['radio', 'status', '状态', '', ['禁用', '启用'], 1]
            ])
            ->fetch();
    }



    /**
     * 删除
     * @param array $record 行为日志
     * @return mixed
     */
    public function delete($record = [])
    {
        return $this->setStatus('delete');
    }

    /**
     * 启用
     * @param array $record 行为日志
     * @return mixed
     */
    public function enable($record = [])
    {
        return $this->setStatus('enable');
    }

    /**
     * 禁用
     * @param array $record 行为日志
     * @return mixed
     */
    public function disable($record = [])
    {
        return $this->setStatus('disable');
    }

    /**
     * 设置状态：删除、禁用、启用
     * @param string $type 类型：delete/enable/disable
     * @param array $record
     * @return mixed
     */
    public function setStatus($type = '', $record = [])
    {
        $ids        = $this->request->isPost() ? input('post.ids/a') : input('param.ids');
        $title = AgentModel::where('id', 'in', $ids)->column('nickname');
        return parent::setStatus($type, ['customer_'.$type, 'customer', 0, UID, implode('、', $title)]);
    }
}