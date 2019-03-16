<?php

namespace app\cms\model;


class Kclass extends Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'dp_cms_kclass';

    // 自动写入时间戳
    protected $autoWriteTimestamp = true;

    /**
     * @param array $map
     * @param string $order
     * @return \think\Paginator
     * @throws \think\exception\DbException
     */
    public static function getAll($map = [], $order = '')
    {
        $data_list = self::where($map)
            ->order($order)
            ->paginate();
        return $data_list;
    }

}