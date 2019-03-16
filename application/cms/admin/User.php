<?php
namespace app\cms\admin;


use app\admin\controller\Admin;
use app\common\builder\ZBuilder;
use think\Db;
use util\Tree;
use app\cms\model\Member as MemberModel;


class User extends Admin
{

    public function index()
    {
        // 查询
        $map = $this->getMap();
        // 排序
        $order = $this->getOrder('cms_user.id desc');
        // 数据列表
        $data_list = MemberModel::getAll($map, $order);
        // 分页数据
        $page = $data_list->render();

        $excelBtn = [
            'title' => '导出数据',
            'icon'  => 'fa fa-fw fa-download',
            'href'  => url('excel')
        ];

        // 使用ZBuilder快速创建数据表格
        return ZBuilder::make('table')
            ->setSearch(['cms_user.telephone' => '手机号码','cms_user.username'=>'姓名'])// 设置搜索框
            ->addColumns([ // 批量添加数据列
                ['telephone', '手机号码', 'text'],
                ['face', '头像', 'picture'],
                ['username', '姓名', 'text'],
                ['age', '年龄', 'text'],
                ['sesame_seed', '芝麻分', 'text'],
                ['agent_name', '渠道 ', 'text'],
                ['create_time', '创建时间', 'datetime'],
                ['ip', '最后登录IP ', 'text'],
                ['right_button', '操作', 'btn']
            ])
            ->addTopButtons('delete')// 批量添加顶部按钮
            ->addTimeFilter('cms_user.create_time')
            ->addTopButton('custom',$excelBtn)
            ->addRightButtons(['delete'])
            ->setRowList($data_list)// 设置表格数据
            ->setPages($page)
            ->fetch(); // 渲染模板
    }


    /**
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function excel(){
        // 查询数据
        $data = (new MemberModel())->field('*')->select();
        // 设置表头信息（对应字段名,宽度，显示表头名称）
        $cellName = [
            ['telephone', 'auto','手机号码'],
            ['username', 'auto','姓名'],
            ['age','auto', '年龄'],
            ['sesame_seed','auto', '芝麻分'],
            ['agent_name','auto', '渠道 '],
            ['create_time','auto', '创建时间'],
            ['ip','auto', '最后登录IP '],
        ];
        foreach ($data as $k=>$v){
            $data[$k]['crate_time'] = date('Y-m-d',$data[$k]['crate_time']);
        }


        // 调用插件（传入插件名，[导出文件名、表头信息、具体数据]）
        plugin_action('Excel/Excel/export', ['用户数据', $cellName, $data]);
    }


    public function add()
    {
        // 保存数据
        if ($this->request->isPost()) {
            // 表单数据
            $data = $this->request->post();

            // 验证
//            $result = $this->validate($data, 'Link');
//            if(true !== $result) $this->error($result);

            if ($link = MemberModel::create($data)) {
                // 记录行为
//                action_log('link_add', 'cms_link', $link['id'], UID, $data['title']);
                $this->success('新增成功', 'index');
            } else {
                $this->error('新增失败');
            }
        }

        // 显示添加页面
        return ZBuilder::make('form')
            ->addFormItems([
                ['text', 'names', '登录用户名','必填，可由英文字母、数字组成'],
                ['text', 'nickname', '渠道名（昵称）','可以是中文'],
                ['password', 'password', '密码','必填，6-20位'],
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
     * 设置状态：删除、禁用、启用
     * @param string $type 类型：delete/enable/disable
     * @param array $record
     * @return mixed
     */
    public function setStatus($type = '', $record = [])
    {
        $ids        = $this->request->isPost() ? input('post.ids/a') : input('param.ids');
        $title = MemberModel::where('id', 'in', $ids)->column('username');
        return parent::setStatus($type, ['users_'.$type, 'users', 0, UID, implode('、', $title)]);
    }

}