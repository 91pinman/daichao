<?php
namespace app\cms\model;


class Agent extends Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'dp_cms_agent';

    // 自动写入时间戳
    protected $autoWriteTimestamp = true;
}