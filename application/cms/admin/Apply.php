<?php

namespace app\cms\admin;

use app\admin\controller\Admin;
use app\common\builder\ZBuilder;
use think\Db;
use app\cms\model\Apply as ApplyModel;
use util\Tree;

/**
 * Class Apply 申请管理
 * @package app\cms\admin
 */
class Apply extends Admin
{

    /**
     * @return mixed
     * @throws \think\Exception
     * @throws \think\exception\DbException
     */
    public function index()
    {
        // 数据列表

        $query = ApplyModel::view('apply', true)
            ->view('cms_agent', ['nickname' => 'agent_name'], 'cms_agent.id=apply.agent_id', 'LEFT')
            ->view('cms_customer', ['names' => 'customer_name'], 'cms_customer.id=apply.customer_id');

        if (session('user_auth.role') != 1){
            $query->where('cms_agent.username',session('user_auth.username'));
        }

        $data_list = $query
            ->where($this->getMap())
            ->order($this->getOrder('apply.id DESC'))
            ->paginate();
        // 分页数据
        $page = $data_list->render();

        $excelBtn = [
            'title' => '导出数据',
            'icon' => 'fa fa-fw fa-download',
            'href' => url('excel')
        ];

        // 使用ZBuilder快速创建数据表格
        return ZBuilder::make('table')
            ->setSearch(['cms_agent.nickname' => '渠道名称','cms_customer.names'=>'产品名 ','apply.telephone'=>'手机号'])// 设置搜索框
            ->addColumns([ // 批量添加数据列
                ['telephone', '申请人手机号', 'text'],
                ['agent_name', '渠道名', 'text'],
                ['customer_name', '产品名', 'text'],
                ['create_time', '申请时间', 'datetime'],
                ['ip', '申请IP', 'text'],
            ])
            ->addTimeFilter('apply.create_time')
            ->setRowList($data_list)// 设置表格数据
            ->addTopButton('custom', $excelBtn)
            ->setPages($page)
            ->fetch(); // 渲染模板
    }


    public function excel()
    {
        $data = (new ApplyModel())->alias('a')
            ->field('a.telephone,a.create_time,a.ip,b.nickname as agent_name,c.names as customer_name')
            ->join('cms_agent b', 'b.id=a.agent_id', 'LEFT')
            ->join('cms_customer c', 'c.id=a.customer_id', 'LEFT')
            ->select();
        $cellName = [
            ['telephone', 'auto', '申请人手机号'],
            ['agent_name', 'auto', '渠道名'],
            ['customer_name', 'auto', '产品名'],
            ['create_time', 'auto', '申请时间'],
            ['ip', 'auto', '申请IP'],
        ];

        foreach ($data as $k => $v) {
            $data[$k]['create_time'] = date('Y-m-d', $data[$k]['create_time']);
        }
        // 调用插件（传入插件名，[导出文件名、表头信息、具体数据]）
        plugin_action('Excel/Excel/export', ['申请数据', $cellName, $data]);
    }

}