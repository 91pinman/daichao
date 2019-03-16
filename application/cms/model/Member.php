<?php

namespace app\cms\model;


class Member extends \think\Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'dp_cms_user';

    // 自动写入时间戳
    protected $autoWriteTimestamp = true;

    public function setPasswordAttr($value)
    {
        return md5($value);
    }

    /**
     * @param array $map
     * @param string $order
     * @return \think\Paginator
     * @throws \think\exception\DbException
     */
    public static function getAll($map = [], $order = '')
    {
        $query = self::view('cms_user', true)
            ->view('cms_agent', ['nickname' => 'agent_name'], 'cms_user.agent_id=cms_agent.id','LEFT');
        if (session('user_auth.role') != 1) {
            $query->where('cms_agent.username', session('user_auth.username'));
        }
        $data_list = $query->where($map)
            ->order($order)
            ->paginate();
        return $data_list;
    }
}