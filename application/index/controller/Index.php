<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2017 河源市卓锐科技有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------
// | 开源协议 ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------

namespace app\index\controller;

use app\cms\model\Agent;
use app\cms\model\Apply;
use app\cms\model\Customer;
use app\cms\model\Member;
use app\cms\model\Slider;
use app\common\model\Code;
use app\common\tools\Miaodiyun;
use think\captcha\Captcha;
use think\Request;
use think\Session;
use think\Db;
/**
 * 前台首页控制器
 * @package app\index\controller
 */
class Index extends Home
{
  	   public function kou($aid = '')
    {
        !empty($aid) && session('agent_id',$aid);

        $list = (new Customer())->field('*')
          	->where('online',1)
            ->order('sort', 'asc')
            ->select();

        $slide = (new Slider())->field('*')
            ->order('sort', 'asc')
            ->select();

        $this->assign(compact('list', 'slide'));
      	$z_where['timer']  = array('lt',strtotime(date('Y-m-d',time())));
         $z_where['times']=array('gt',0);
         $j_where['times']=array('gt',0);
      	$j_where['timer']  = array('egt',strtotime(date('Y-m-d',time())));
      	$zuo=Db::name('cms_customer')->where($z_where)->order('timer asc')->select();
      	$z_arrays=array();
      	if($zuo){
          	foreach($zuo as $key=>$val){
              	$z_arrays[$val['time']]['val'][$key]=$val;
              	$z_arrays[$val['time']]['time']=$val['time'];
            }
        }
      
      	$z_array=array_values($z_arrays);
      	$jin=Db::name('cms_customer')->where($j_where)->order('timer asc')->select();
      	$j_array=array();
        $j_array[10]=array();
        $j_array[14]=array();
         $j_array[16]=array();
        $j_array[20]=array();
      	if($jin){
          	foreach($jin as $key=>$val){
              	$j_array[$val['times']][$key]=$val;
            }
        }
      	$n_where['create_time']= array('egt',strtotime(date('Y-m-d',time())));
      	$num=Db::name('apply')->where($n_where)->count();
      	$nums=8888-$num;
      	$q=intval($nums/1000);
      	$nums=$nums-$q*1000;
      	$b=intval($nums/100);
      	$nums=$nums-$b*100;
      	$s=intval($nums/10);
      	$nums=$nums-$s*10;
      	$nu['q']=$q;
      	$nu['b']=$b;
      	$nu['s']=$s;
      	$nu['n']=$nums;
      	$this->assign(compact('z_array','j_array','nu'));
        return $this->fetch();
    }
    public function index11($aid = '')
    {
        !empty($aid) && session('agent_id',$aid);

        $list = (new Customer())->field('*')
          	->where('online',1)
            ->order('sort', 'asc')
            ->select();

        $slide = (new Slider())->field('*')
            ->order('sort', 'asc')
            ->select();

        $this->assign(compact('list', 'slide'));
        return $this->fetch();
    }
	public function index($aid = '')
    {
      	$list=Db::name('cms_customer')->where(array('new_product'=>1,'times'=>0))->select();
      	foreach($list as $key=>$val ){
          	if($val['biaoqian']==1){
              	$list[$key]['biaoqian']='极速下款';
            }else if($val['biaoqian']==2){
              	$list[$key]['biaoqian']='通过率高';
            }else{
              $list[$key]['biaoqian']='审核简单';
            }
        }
      	$time=strtotime(date('Y-m-d',time()))+3600*24-time();
      	$nums=$time;
      	$q=intval($nums/3600);
      	$nums=$nums-$q*3600;
      	$b=intval($nums/60);
      	$nums=$nums-$b*60;
      	$nu['h']=$q;
      	$nu['i']=$b;
      	$nu['s']=$nums;
      	$array['times']=array('gt',0);
      	$count=Db::name('cms_customer')->where($array)->count();
      	$class=Db::name('cms_kclass')->select();
      	$banner=Db::name('cms_slider')->where(array('status'=>1))->select();
      	$this->assign(compact('list', 'class','banner','count','time','nu'));
        return $this->fetch();
    }
  	public function loan($aid = 'all')
    {
      	if($aid!='all'){
          	$list=Db::name('cms_customer')->where(array('class'=>$aid,'times'=>0))->select();
          	$title=Db::name('cms_kclass')->where(array('id'=>$aid))->find();
          	$title=$title['names'];
        }else{
          	$list=Db::name('cms_customer')->where(array('times'=>0))->select();
          	$title='所有贷款产品';
        }
      	foreach($list as $key=>$val ){
          	if($val['biaoqian']==1){
              	$list[$key]['biaoqian']='极速下款';
            }else if($val['biaoqian']==2){
              	$list[$key]['biaoqian']='通过率高';
            }else{
              $list[$key]['biaoqian']='审核简单';
            }
        }
      	$class=Db::name('cms_kclass')->select();
      	
      	foreach( $class as $key=>$val){
          	if($val['id']==$aid){
              	$class[$key]['sel']='selected';
            }else{
              	$class[$key]['sel']='';
            }
        }
      	if($aid=='all'){
          	$class[count($class)]['id']='all';
          	$class[count($class)-1]['names']='所有贷款产品';
          	$class[count($class)-1]['sel']='selected';
        }else{
          	$class[count($class)]['id']='all';
          	$class[count($class)-1]['names']='所有贷款产品';
          	$class[count($class)-1]['sel']='';
        }
      	sort($class);
      	$this->assign(compact('list', 'class','title'));
        return $this->fetch();
    }
	public function cat($id='')
    {
      if(empty($id)){
        $this->redirect('/index.php/index/index/index');
      }
      
      $list=Db::name('cms_customer')->where(array('id'=>$id))->find();
      $lists=Db::name('cms_customer')->where(array('class'=>$list['class']))->select();
      $array=array();
      foreach($lists as $key=>$val ){
          	if($val['biaoqian']==1){
              	$lists[$key]['biaoqian']='极速下款';
            }else if($val['biaoqian']==2){
              	$lists[$key]['biaoqian']='通过率高';
            }else{
              $lists[$key]['biaoqian']='审核简单';
            }
        	if($val['id']!=$list['id']){
              	$array[$key]=$lists[$key];
            }
        }
      if($list['biaoqian']==1){
        $list['biaoqian']='极速下款';
      }else if($list['biaoqian']==2){
        $list['biaoqian']='通过率高';
      }else{
        $list['biaoqian']='审核简单';
      }
      $lists=$array;
      $this->assign(compact('list', 'lists','id'));
      return $this->fetch();
    }
    public function supermarket()
    {
      	if (!Session::has('users')) {
           $this->redirect('/index.php/index/index/login');
        }
        $list = (new Customer())->field('*')
            ->where('online',1)
            ->order('sort', 'asc')
            ->select();

        $this->assign(compact('list'));
        return $this->fetch();
    }

    public function pass()
    {
        if (!Session::has('users')) {
            $this->redirect('/index.php/index/index/login');
        }
        return $this->fetch();
    }
  	public function pas()
    {
        if (!Session::has('users')) {
            $this->error('unlogin');
        }
        
        $data = $this->request->post();
      	if($data['passold']==$data['passnew2']){
          $this->error('新密码不能和原始密码相同');
        }
      	$where['id']=session('users.id');
      	$where['password']=md5($data['passold']);
		$users=Db::name('cms_user')->where($where)->find();
        if (!$users){
          $this->error('原始密码错误！');
        }else{
          	$status=Db::name('cms_user')->where(array('id'=>session('users.id')))->update(array('password'=>md5($data['passnew2'])));
             if($status){
                $this->success();
             }else{
               	 $this->error('修改失败！');
             }
        }
    }
  	 public function cry($id='')
    {
        if (empty($id)) {
            $this->redirect('/index.php/index/index/news');
        }
       	$new=Db::name('cms_news')->where(array('id'=>$id))->find();
         $this->assign(compact('new'));
        return $this->fetch();
    }
	public function user()
    {
      	if (!Session::has('users')) {
            $this->redirect('/index.php/index/index/login');
        }
        $app=Db::name('admin_config')->where(array('name'=>'app'))->find();
      	$name=session('users.username');
      	$app=$app['value'];
      	$this->assign(compact('app','name'));
        return $this->fetch();
    }
  	public function kefu()
    {
        $kefu=Db::name('admin_config')->where(array('name'=>'kefu'))->find();
      	$kefu=$kefu['value'];
      	 $this->assign(compact('kefu'));
        return $this->fetch();
    }
	public function news()
    {
        $list=Db::name('cms_news')->select();
      	$banner=Db::name('cms_slider')->where(array('status'=>1))->select();
      	 $this->assign(compact('list','banner'));
        return $this->fetch();
    }
    public function logout(){
        Session::delete('users');
        $this->redirect('/');
    }
	  
    /**
     * @throws \think\Exception
     * @throws \think\exception\DbException
     */
  	
    public function shuju()
    {
        if (!Session::has('users')) {
            $this->error('unlogin');
        }
        $data = $this->request->post();

        if (empty($data['chanid'])) {
            $this->error('操作不合法！');
        }

        $customer = Customer::get($data['chanid']);

        if (!$customer) {
            $this->error('操作不合法(102)！');
        }
        $applyData = [
            'member_id' => session('users.id'),
            'customer_id' => $data['chanid'],
          	'card'=> $data['card'],
            'agent_id' => Session::has('agent_id') ? session('agent_id') : null,
            'ip' => $this->request->ip(),
            'telephone' => session('users.telephone')
        ];
      	$where = [
            'member_id' => session('users.id'),
            'customer_id' => $data['chanid'],
            'telephone' => session('users.telephone')
        ];
      	$count=Db::name('apply')->where($where)->count();
     	 if($count>0){
           	$this->success('', $customer['links']);exit;
      	}
        if (false === Apply::create($applyData, true)) {
            $this->error('申请失败！');
        }

        if (Session::has('agent_id')) {
            if (false === (new Agent())->where('id', session('agent_id'))->setInc('browse')) {
                $this->error('申请失败！(102)');
            }
        }
        $this->success('', $customer['links']);
    }


    public function login()
    {
        if ($this->request->isPost()) {
            $data = $this->request->post();
            if (empty($data['telephone']) || empty($data['password'])){
                $this->error('手机号码或者密码不能为空');
            }

            $users = Member::get(['telephone'=>$data['telephone'],'password'=>md5($data['password'])]);

            if (!$users){
                $this->error('手机号码或者密码错误！');
            }
            session('users',$users);
            $users->ip = $this->request->ip();
            $users->save();
            $this->success();

        }
        return $this->fetch();
    }

    public function register()
    {
        if ($this->request->isPost()) {
            $data = $this->request->post();
            $result = $this->validate($data, 'Member');
            if (true !== $result) $this->error($result);


            $data['agent_id'] = Session::has('agent_id') ? session('agent_id') : null;
            $data['ip'] = $this->request->ip();

            if (false === $member = Member::create($data, true)) {
                $this->error('用户注册失败！');
            }
            if (Session::has('agent_id')) {
                (new Agent())->where('id', session('agent_id'))->setInc('register');
            }
            session('users', $member);
            $this->success();
        }
        return $this->fetch();
    }

    public function forget()
    {
        if ($this->request->isPost()) {
            $data = $this->request->post();
            $result = $this->validate($data, 'Member.forget');
            if (true !== $result) $this->error($result);

            $member = Member::get(['telephone'=>$data['telephone']]);

            if (!$member){
                $this->error('用户不存在！');
            }

            $member->password = $data['password'];

            if (false === $member->save()){
                $this->error('密码修改失败！');
            }
            $this->success();
        }


        return $this->fetch();
    }

    public function captcha()
    {
        $captcha = new Captcha();
        return $captcha->entry();
    }


    public function send_code()
    {
        $data = $this->request->post();
        if (empty($data['mobile']) || !preg_match("/^1[3456789]{1}\d{9}$/", $data['mobile'])) {
            $this->error('手机号码格式错误！');
        }

        $scene = !empty($data['scene']) ? $data['scene'] : 10;

        $code = Code::get(['telephone' => $data['mobile'], 'scene' => $scene]);

        if ($code && $code['create_time'] + 600 > time()) {
            $this->error('请一分钟后再试！');
        }

        if (empty($data['picVerify'])) {
            $this->error('验证码不能为空');
        }

        if (!(new Captcha())->check($data['picVerify'])) {
            $this->error('图片验证码错误，请重新输入');
        }
        $code = rand(1000, 9999);

        switch ($scene) {
            case 11:
                $smsContent = "【百创科技】{$code}是您本次找回密码的验证码。如非本人操作，请忽略此短信。";
                if (!Member::get(['telephone'=>$data['mobile']])){
                    $this->error('手机号码还没有注册！');
                }
                break;
            case 10:
            default:
                $smsContent = "【百创科技】{$code}是您本次注册的验证码。如非本人操作，请忽略此短信。";
                break;
        }



        $codeData = [
            'telephone' => $data['mobile'],
            'code' => md5($code),
            'scene' => $scene
        ];

        if (false === Code::create($codeData, true)) {
            $this->error('短信验证码发送失败！');
        }


        $body = [
            'smsContent' => $smsContent,
            'to' => $data['mobile']
        ];
        $Smsapi = new Miaodiyun();
        $status = $Smsapi->post('industrySMS/sendSMS', $body);
        if ($status['respCode'] == '0000') {
            $this->success('短信验证码发送成功!');
        } else {
            $this->error($status['respDesc']);
        }
    }
}
