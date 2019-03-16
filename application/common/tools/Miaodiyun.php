<?php
namespace app\common\tools;

/**
 * @author xiaomin<keacefull@gmail.com>
 * @link  https://www.xaiznhoukeji.cn
 * @copyright 2014-2018 Ruyi Technology (Chongqing) LLC.
 */
class Miaodiyun
{
    /**
     * @var string url中的accountSid。如果接口验证级别是主账户则传网站“个人中心”页面的“账户ID”，
     */
    protected $baseUrl = 'https://api.miaodiyun.com/20150822/';
    /**
     * @var string 主账户
     */
    protected $accountSid;
    /**
     * @var string Token
     */
    protected $authToken;
    /**
     * @var string 请求类型
     */
    protected $contentType = 'application/x-www-form-urlencoded';
    /**
     * @var string 期望服务器响应的内容类型，可以是application/json或application/xml
     */
    protected $accept = 'application/json';


    /**
     * Miaodiyun constructor.
     * @param $accountSid
     * @param $authToken
     * @param string $baseUrl
     * @param string $contentType
     * @param string $accept
     */
    public function __construct($accountSid='', $authToken='', $baseUrl = '', $contentType = '', $accept = '')
    {
        $this->accountSid = empty($accountSid) ? config('miaodi_account') : $accountSid;
        $this->authToken = empty($authToken) ? config('miaodi_token') : $authToken;;
        !empty($baseUrl) && $this->baseUrl = $baseUrl;
        !empty($contentType) && $this->contentType = $contentType;
        !empty($accept) && $this->accept = $accept;
    }

    /**
     * 发送POST请求
     *
     * @param string $funAndOperate url中{function}/{operation}?部分
     * @param array $data 参数
     * @return mixed
     */
    public function post($funAndOperate, $data)
    {
        // 构造请求数据
        $url = $this->baseUrl . $funAndOperate;
        $headers = array('Content-type:application/x-www-form-urlencoded', 'Accept: application/json');
        //基本请求参数
        $timestamp = date("YmdHis");
        // 签名
        $sig = md5($this->accountSid . $this->authToken . $timestamp);
        $baseBody = array("accountSid" => $this->accountSid, "timestamp" => $timestamp, "sig" => $sig, "respDataType" => "JSON");
        $body = array_merge($baseBody, $data);
        // 要求post请求的消息体为&拼接的字符串，所以做下面转换
        $fields_string = "";
        foreach ($body as $key => $value) {
            $fields_string .= $key . '=' . $value . '&';
        }
        rtrim($fields_string, '&');
        //提交请求
        $con = curl_init();
        curl_setopt($con, CURLOPT_URL, $url);
        curl_setopt($con, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($con, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($con, CURLOPT_HEADER, 0);
        curl_setopt($con, CURLOPT_POST, 1);
        curl_setopt($con, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($con, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($con, CURLOPT_POSTFIELDS, $fields_string);
        $result = curl_exec($con);
        curl_close($con);
        return json_decode($result, true);
    }
}