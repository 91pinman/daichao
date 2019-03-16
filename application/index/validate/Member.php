<?php
/**
 * Created by PhpStorm.
 * User: Xiaomin
 * Date: 2018/09/17
 * Time: 15:26
 */

namespace app\index\validate;


use app\common\model\Code;
use think\Validate;

class Member extends Validate
{

    // 定义验证规则
    protected $rule = [
        'telephone|手机号码' => 'require|unique:cms_user,telephone',
        'password|密码' => 'require|length:6,16',
        'username|姓名' => 'require',
        'age|年龄' => 'require|number',
        'sesame_seed|芝麻分' => 'require|number',
        'code|验证码' => 'require|checkCode:10'
    ];

    /**
     * @param $value
     * @param $rule
     * @param $data
     * @return bool|string
     * @throws \think\exception\DbException
     */
    protected function checkCode($value, $rule, $data)
    {

        $code = (new Code())->where('telephone', $data['telephone'])->where( 'scene' ,$rule)->order('create_time','desc')->find();

        if (!$code) {
            return '没有找到验证码发送记录！';
        }

        if ($code && $code['create_time'] + 600 < time()) {
            return '验证码已过期！';
        }


        if (md5($data['code']) != $code['code']){
            return '验证码错误!'.$data['code'].'='.$code['code'];
        }


        return true;
    }


    protected $scene = [
        'forget'  =>  ['telephone|手机号码' => 'require','code|验证码' => 'require|checkCode:11','password|密码' => 'require|length:6,16',],
    ];



}