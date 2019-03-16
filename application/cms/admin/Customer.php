<?php

namespace app\cms\admin;


use app\admin\controller\Admin;
use app\common\builder\ZBuilder;
use app\cms\model\Customer as CustomerModel;
use think\Db;
use util\Tree;

class Customer extends Admin
{
    /**
     * @return mixed
     * @throws \think\Exception
     * @throws \think\exception\DbException
     */
    public function index()
    {
        // 数据列表
        $data_list = CustomerModel::where($this->getMap())
            ->order($this->getOrder('sort ASC'))
            ->paginate();
        // 分页数据
        $page = $data_list->render();
		foreach($data_list as $key=>$val ){
          	if($val['class']>0){
              	$class=Db::name('cms_kclass')->where(array('id'=>$val['class']))->find();
              	$data_list[$key]['class']=$class['names'];
            }else{
              	$data_list[$key]['class']='暂无';
            }
          	if($val['biaoqian']==1){
              	$data_list[$key]['biaoqian']='极速下款';
            }else if($val['biaoqian']==2){
              	$data_list[$key]['biaoqian']='通过率高';
            }else{
              $data_list[$key]['biaoqian']='审核简单';
            }
          	if($val['times']==0){
              	$data_list[$key]['times']='不限时间';
            }else if($val['times']==10){
              	$data_list[$key]['times']='10:00场';
            }else if($val['times']==14){
              	$data_list[$key]['times']='14:00场';
            }else if($val['times']==16){
              	$data_list[$key]['times']='16:00场';
            }else{
              	$data_list[$key]['times']='20:00场';
            }
        }
        // 使用ZBuilder快速创建数据表格
        return ZBuilder::make('table')
            ->setSearch(['names' => '名称'])// 设置搜索框
            ->addColumns([ // 批量添加数据列
                ['names', '名称', 'text.edit'],
                ['cover', 'LOGO', 'picture'],
                ['links', '链接', 'text.edit'],
              	['class', '分类', 'text'],
              	['biaoqian', '标签', 'text'],
                ['create_time', '创建时间', 'datetime'],
              	['timer', '开启时间', 'datetime'],
              	['times', '具体时间', 'text'],
                ['sort', '排序', 'text.edit'],
                ['tops', '置顶', 'switch'],
                ['online', '上线', 'switch'],
                ['right_button', '操作', 'btn']
            ])
            ->addTopButtons('add,enable,disable,delete')// 批量添加顶部按钮
            ->addRightButtons(['edit', 'delete'])
            ->setRowList($data_list)// 设置表格数据
            ->setPages($page)
            ->fetch(); // 渲染模板
    }


    public function add()
    {
        // 保存数据
        if ($this->request->isPost()) {
            // 表单数据
            $data = $this->request->post();
			$data['timer']=strtotime($data['time']);
            // 验证
//            $result = $this->validate($data, 'Link');
//            if(true !== $result) $this->error($result);

            if ($link = CustomerModel::create($data)) {
                // 记录行为
//                action_log('link_add', 'cms_link', $link['id'], UID, $data['title']);
                $this->success('新增成功', 'index');
            } else {
                $this->error('新增失败');
            }
        }
		$class=Db::name('cms_kclass')->select();
      	foreach($class as $key){
          	$array[$key['id']]=$key['names'];
        }
      	$mep[1]='极速下款';
      	$mep[2]='通过率高';
      	$mep[3]='审核简单';
        // 显示添加页面
      	$time=date('Y-m-d',time());
        // 显示添加页面
      $arrays['0']='不限时间';
     	$arrays['10']=10;
      $arrays['14']=14;
      $arrays['16']=16;
      $arrays['20']=20;
        return ZBuilder::make('form')
            ->addFormItems([
                ['text', 'names', '名称'],
                ['image', 'cover', '图片'],
                ['text', 'links', '链接'],
                ['text', 'lower_money', '已下款初始值'],
                ['text', 'main_points', '要点'],
              	['text', 'yue', '日利率'],
              	['text', 'money', '下款金额'],
              	['text', 'ren', '下款人数'],
              	['text', 'qixian', '借款期限'],
              	['text', 'lv', '通过率'],
                ['text', 'sort', '排序', '', 100],
                ['radio', 'new_product', '新品', '', ['否', '是'], 1],
                ['radio', 'throughput', '高通过率', '', ['否', '是'], 1],
              	
                ['radio', 'tops', '顶置', '', ['否', '是'], 1],
                ['radio', 'online', '上线', '', ['否', '是'], 1]
            ])
          	->addRadio('times', '选择开启具体时间', '',$arrays)
          	->addDate('time', '开启时间时间', '',$time)
          	->addRadio('class', '分类', '', $array)
          	->addRadio('biaoqian', '标签', '', $mep)
//            ->setTrigger('type', 2, 'cover')
            ->fetch();
    }


    /**
     * 编辑
     * @param null $id 链接id
     * @author 蔡伟明 <314013107@qq.com>
     */
    public function edit($id = null)
    {
        if ($id === null) $this->error('缺少参数');

        // 保存数据
        if ($this->request->isPost()) {
            // 表单数据
            $data = $this->request->post();
			$data['timer']=strtotime($data['time']);
            // 验证
//            $result = $this->validate($data, 'Link');
//            if(true !== $result) $this->error($result);

            if (CustomerModel::update($data)) {
                // 记录行为
//                action_log('link_edit', 'cms_link', $id, UID, $data['title']);
                $this->success('编辑成功', 'index');
            } else {
                $this->error('编辑失败');
            }
        }

        $info = CustomerModel::get($id);
		$class=Db::name('cms_kclass')->select();
            foreach($class as $key){
                $array[$key['id']]=$key['names'];
            }
            $mep[1]='极速下款';
            $mep[2]='通过率高';
            $mep[3]='审核简单';
      	if(empty($info['time'])){
          $time=$info['time'];
        }else{
          $time=date('Y-m-d',time());
        }
        // 显示编辑页面
      	 $arrays['0']='不限时间';
      	$arrays['10']=10;
      $arrays['14']=14;
      $arrays['16']=16;
      $arrays['20']=20;
        // 显示编辑页面
        return ZBuilder::make('form')
            ->addFormItems([
                ['hidden', 'id'],
                ['text', 'names', '名称'],
                ['image', 'cover', '图片'],
                ['text', 'links', '链接'],
              	['text', 'yue', '日利率'],
              	['text', 'money', '下款金额'],
              	['text', 'ren', '下款人数'],
              	['text', 'qixian', '借款期限'],
              	['text', 'lv', '通过率'],
                ['text', 'lower_money', '已下款初始值'],
                ['text', 'main_points', '要点'],
                ['text', 'sort', '排序'],
                ['radio', 'new_product', '新品', '', ['否', '是']],
                ['radio', 'throughput', '高通过率', '', ['否', '是']],
                ['radio', 'tops', '顶置', '', ['否', '是']],
                ['radio', 'online', '上线', '', ['否', '是']]
            ])
          	->addDate('time', '开启时间', '',$time)
          	->addRadio('times', '具体开启时间', '', $arrays, $info['times'])
          	->addRadio('class', '分类', '', $array, 'class')
            ->addRadio('biaoqian', '标签', '', $mep, 'biaoqian')
            ->setTrigger('type', 2, 'logo')
            ->setFormData($info)
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
        $title = CustomerModel::where('id', 'in', $ids)->column('names');
        return parent::setStatus($type, ['customer_'.$type, 'customer', 0, UID, implode('、', $title)]);
    }

}