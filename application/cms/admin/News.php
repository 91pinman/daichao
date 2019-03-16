<?php

namespace app\cms\admin;


use app\admin\controller\Admin;
use app\common\builder\ZBuilder;
use app\cms\model\News as NewsModel;
use think\Db;
use util\Tree;

class News extends Admin
{
    /**
     * @return mixed
     * @throws \think\Exception
     * @throws \think\exception\DbException
     */
    public function index()
    {
        // 数据列表
        $data_list = NewsModel::where($this->getMap())
            ->order($this->getOrder('sort ASC'))
            ->paginate();
        // 分页数据
        $page = $data_list->render();

        // 使用ZBuilder快速创建数据表格
        return ZBuilder::make('table')
            ->addColumns([ // 批量添加数据列
                ['names', '咨询名称', 'text'],
                ['num', '点击数', 'text'],
                ['create_time', '创建时间', 'datetime'],
                ['right_button', '操作', 'btn']
            ])
            ->addRightButtons(['edit', 'delete'])
          	->addTopButtons('add,delete')// 批量添加顶部按钮
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

            // 验证
//            $result = $this->validate($data, 'Link');
//            if(true !== $result) $this->error($result);

            if ($link =NewsModel::create($data)) {
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
                ['text', 'names', '咨询标题'],
                ['text', 'num', '点击数'],
            ])
        	->addUeditor('txt', '详情')
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

            // 验证
//            $result = $this->validate($data, 'Link');
//            if(true !== $result) $this->error($result);

            if (NewsModel::update($data)) {
                // 记录行为
//                action_log('link_edit', 'cms_link', $id, UID, $data['title']);
                $this->success('编辑成功', 'index');
            } else {
                $this->error('编辑失败');
            }
        }

        $info = NewsModel::get($id);

        // 显示编辑页面
        return ZBuilder::make('form')
            ->addFormItems([
                ['hidden', 'id'],
                ['text', 'names', '咨询标题'],
                ['text', 'num', '点击数'],
            ])
          	->addUeditor('txt', '详情')
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
        $title = NewsModel::where('id', 'in', $ids)->column('names');
        return parent::setStatus($type, ['customer_'.$type, 'customer', 0, UID, implode('、', $title)]);
    }

}