<?php
/**
 * Created by PhpStorm.
 * User: Xiaomin
 * Date: 2018/09/17
 * Time: 10:23
 */

namespace app\cms\model;


class Apply extends \think\Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'dp_apply';

    // 自动写入时间戳
    protected $autoWriteTimestamp = true;
}