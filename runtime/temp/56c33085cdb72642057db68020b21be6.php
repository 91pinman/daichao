<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"/www/wwwroot/a.fhhcpu.top/public/../application/index/view/index/cat.html";i:1550792377;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0043)https://dk.yunruan.ltd/loan/read/id/21.html -->
<html lang="zh-CN" class="pixel-ratio-2 retina android android-6 android-6-0"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>产品详情-<?php echo $list['names']; ?></title>

	<meta name="keywords" content="陈 测试站点">
	<meta name="description" content="陈 测试站点-为你提供借款融资一站式解决方案">

	<meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- head 中 -->
	<link rel="stylesheet" href="/static/cat/weui.min.css">
	<link rel="stylesheet" href="/static/cat/jquery-weui.min.css">
	<link rel="stylesheet" type="text/css" href="/static/cat/main.css">
	<link rel="stylesheet" type="text/css" href="/static/cat/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/static/cat/layui.css">
	<script src="/static/cat/jquery1.42.min.js.下载" type="text/javascript" charset="utf-8"></script>
	<script src="/static/cat/jquery.SuperSlide.2.1.3.js.下载" type="text/javascript" charset="utf-8"></script>
	<script src="/static/cat/TouchSlide.1.1.js.下载" type="text/javascript" charset="utf-8"></script>
	<script src="/static/cat/layui.all.js.下载" type="text/javascript" charset="utf-8"></script><link id="layuicss-laydate" rel="stylesheet" href="/static/cat/laydate.css" media="all"><link id="layuicss-layer" rel="stylesheet" href="/static/cat/layer.css" media="all"><link id="layuicss-skincodecss" rel="stylesheet" href="/static/cat/code.css" media="all">
</head>
<body>


<div id="app">
	
		<div class="header">
			<div class="header-nav">
              <a style="float:left;padding-left: .5rem" href="javascript:history.go(-1);">
                <img  src="/static/cat/y.png">
              </a>
				<span>详情</span>
			</div>

		</div>

		<div style="height: 2rem;"></div>
		<div class="pro-info">
			
			<div class="pro-bg">
				<p><span>可借额度</span><span class="fr">参考成功率</span></p>
				<p><span><?php echo $list['money']; ?>元</span><span class="fr"><?php echo $list['yue']; ?></span></p>
			</div>

			
			<div class="pro-con">
				<div class="info clearfix">
					<div class="info-img clearfix">
						<img src="<?php echo get_thumb($list['cover']); ?>">
						<div class="name">
							<p><?php echo $list['names']; ?></p>
							<p class="gray">借款周期：<span class="red"><?php echo $list['qixian']; ?>天</span></p>
						</div>
					</div>
					<p class="line"><span class="txt">产品人气：</span>
						<span class="txt-bg">爆款</span>						<span class="txt2"><?php echo $list['ren']; ?>人申请</span></p>

					<p class="line"><span class="txt">放款速度：</span>
						<span class="txt-bg">及快</span>
												<span class="txt2">当天放款</span></p>

					<p class="line"><span class="txt">放款周期：</span>

						<span class="txt-bg" style="width: 20%;">&nbsp;</span>
						
						<span class="txt2">较短</span>
						
						</p>
				</div>
				<div class="intro">
					<p class="p">费用说明</p>
					<p class="pp">每日日利率<?php echo $list['yue']; ?></p>
				</div>
				<div class="intro">
					<p class="p">申请攻略</p>
					<p class="pp"><?php echo $list['main_points']; ?></p>
				</div>
				<div class="intro">
					<p class="p">同类推荐</p>


						<div class="rec_pro">
							<?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<div class="rec_pro_list clearfix">
									<a href="/index.php/index/index/cat/id/<?php echo $vo['id']; ?>">
										<div class="lf"><img src="<?php echo get_thumb($vo['cover']); ?>" alt="<?php echo $vo['names']; ?>"></div>
										<div class="rg">
											<p class="p1 clearfix"><span><?php echo $vo['names']; ?></span><span><?php echo $vo['biaoqian']; ?></span></p>
											<p class="p2 clearfix"><span>可借额度：</span><span><?php echo $vo['money']; ?>元</span></p>
											<p class="p3 clearfix"><span>参考：利率日<?php echo $vo['yue']; ?></span><span><?php echo $vo['ren']; ?>人已申请</span></p>
										</div>
									</a>
								</div>
                          	<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>


				</div>
			</div>







		</div>






	<div style="height: 3rem;"></div>


  <div class="weui-tabbar" style="position: fixed;max-width: 640px">
	<input type="hidden" id="id" value="<?php echo $id; ?>">
    <a href="javascript:;" style="width: 100%;background: #ffbc2b;" onclick="tanzi()">
      <p style="color: #111;line-height: 53px;text-align: center;font-size: 15px;">立即申请</p>
    </a>

  </div>
</div>





<script src="/static/cat/jquery.min.js.下载"></script>
<script src="/static/cat/jquery-weui.min.js.下载"></script>
<script type="text/javascript">
	

	function tanzi(){
		
	// layui.use('layer', function(){ //独立版的layer无需执行这一句
		// var $ = layui.jquery, layer = layui.layer; //独立版的layer无需执行这一句
		//示范一个公告层
      layer.open({
        type: 1
        ,title: false //不显示标题栏
        ,closeBtn: false
        ,area: '300px;'
		,shadeClose:true 
		,shade: [0.3, '#393D49']
        ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
        ,btn: ['马上申请']
        ,btnAlign: 'c'
        ,moveType: 1 //拖拽模式，0或者1
        ,content: '<div style="padding: 20px; line-height: 22px;border-radius:5px; background-color: #FFF; color: #333; font-weight: 300;"><form class="layui-form" action=""><div class="layui-form-item"><input type="text" name="cardno" id="shenfenzheng" required  lay-verify="required" placeholder="身份证号码" autocomplete="off" class="layui-input"></div></form></div>'
        ,yes: function(layero){
               var judge = "0";
				var shenfen=$("#shenfenzheng").val();
				if(shenfen==''){
					layer.msg('身份证号码不得为空');return false;
				}
              if(judge!=0) {
                  if (jine == '') {
                      layer.msg('验证码不得为空');
                      return false;
                  }
              }
				//提交到后台
				$.post(
					"/index.php/index/index/shuju.html",
					{
						card:shenfen,
						chanid:$('#id').val()
					},
					function (res){
                      if (res.code === 1) {
                    	location.href = res.url
                	}else{
                      	if(res.msg === 'unlogin'){
							layer.msg("暂未登录,请登录帐号");
                          	 window.location.href='/index.php/index/index/login';
							return false;
						}else{
							layer.msg(res.msg);
							return false;
						}
                	}	
						
					}
					);
				//alert(name);
        }
      });
	  // });
	}






</script>


<!-- body 最后 -->
<script src="/static/cat/main.js.下载"></script>
<script src="/static/cat/jquery.min.js.下载"></script>
<script src="/static/cat/jquery-weui.min.js.下载"></script>
</body></html>