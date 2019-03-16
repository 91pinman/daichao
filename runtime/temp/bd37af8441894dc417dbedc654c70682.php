<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"/www/wwwroot/a.fhhcpu.top/public/../application/index/view/index/index.html";i:1551471026;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0023)https://dk.yunruan.ltd/ -->
<html lang="zh-CN" class="pixel-ratio-2 retina android android-6 android-6-0"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>蜡笔傻新</title>

	<meta name="keywords" content="陈 测试站点">
	<meta name="description" content="陈 测试站点-为你提供借款融资一站式解决方案">

	<meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- head 中 -->
	<link rel="stylesheet" href="/static/shouye/weui.min.css">
	<link rel="stylesheet" href="/static/shouye/jquery-weui.min.css">
	<link rel="stylesheet" type="text/css" href="/static/shouye/main.css">
	<link rel="stylesheet" type="text/css" href="/static/shouye/font-awesome.min.css">

  <script src="/static/shouye/jquery1.42.min.js.下载" type="text/javascript" charset="utf-8"></script>
	<script src="/static/shouye/jquery.SuperSlide.2.1.3.js.下载" type="text/javascript" charset="utf-8"></script>
	<script src="/static/shouye/TouchSlide.1.1.js.下载" type="text/javascript" charset="utf-8"></script>
	<script src="/static/shouye/layer.js.下载" type="text/javascript" charset="utf-8"></script>
  <link href="/static/shouye/layer.css" type="text/css" rel="styleSheet" id="layermcss">
  <style>
    #nb_icon_wrap{display:none}
  </style>



  </head>
<body>





				<!-- banner Start ================================ -->
			<div id="focus" class="focus">
				<div class="hd">
					<ul>
                      	<?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $k = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                      		<li class=""><?php echo $k; ?></li>
                      	<?php endforeach; endif; else: echo "" ;endif; ?>
                  </ul>
				</div>
				<div class="bd">
					<div class="tempWrap" style="overflow:hidden; position:relative;">
                      <ul style="width: 1600px; position: relative; overflow: hidden; padding: 0px; margin: 0px; transition-duration: 0ms; transform: translate(-1200px, 0px) translateZ(0px);">
                        <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $k = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
						<li style="display: table-cell; vertical-align: top; width: 400px;"><a href=""><img src="<?php echo get_thumb($vo['cover']); ?>"></a></li>		
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                      </ul>
                  </div>
				</div>
			</div>
			<script type="text/javascript">
				TouchSlide({ 
					slideCell:"#focus",
					titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
					mainCell:".bd ul", 
					effect:"left", 
					autoPlay:true,//自动播放
					autoPage:true, //自动分页
					switchLoad:"_src" //切换加载，真实图片路径为"_src" 
				});
			</script>
			<!-- banner End ================================ -->





		<div class="txtScroll-top white">
			<div class="bd">
				<div class="tempWrap" style="overflow:hidden; position:relative; height:32px">
					<ul class="infoList" >
						<li class="clearfix" style="height: 40px;width:260px;margin:0 auto">
                          <a href="/index.php/index/index/kou/ts/<?php echo time().rand(0, 15)?>">
                          	<span style="height:38px;border-radius: 19px;background: #47a3ff;text-align:center;width:260px;margin:0 auto">
                              <span style="color:#fff">最新口子</span >
                              <input type="hidden" value="<?php echo $time; ?>" id="time">
                               <span style="color:red;font-size:12px;padding:0px">&nbsp;<?php echo $count; ?>家&nbsp;&nbsp;</span>
                              	<span style="color:fff;padding:0px;font-weight:bold" id="h"><?php echo $nu['h']; ?></span>
                              	<span style="color:#333;padding:0px;font-weight:bold">&nbsp;&nbsp;:&nbsp;&nbsp;</span>
                              	<span style="color:fff;padding:0px;font-weight:bold" id="i"><?php echo $nu['i']; ?></span>
                              	<span style="color:#333;padding:0px;font-weight:bold">&nbsp;&nbsp;:&nbsp;&nbsp;</span>
                              	<span style="color:fff;padding:0px;font-weight:bold" id="s"><?php echo $nu['s']; ?></span>
                              	<span style="color:#fff;padding:0px;font-weight:bold">&nbsp;&nbsp;>>>></span>
                            </span>
                          </a>
                      </li>
						
					</ul>
				</div>
			</div>
		</div>




	
		<div class="weui-flex nav white">
          	<?php if(is_array($class) || $class instanceof \think\Collection || $class instanceof \think\Paginator): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<div class="weui-flex__item">
				<a href="/index.php/index/index/loan/aid/<?php echo $vo['id']; ?>">
					<img src="<?php echo get_thumb($vo['cover']); ?>" alt="" style="width:57px;height:57px;">
					<p><?php echo $vo['names']; ?></p>
				</a>
			</div>
          	<?php endforeach; endif; else: echo "" ;endif; ?>		
	    </div>

		<div class="hot-nav white">
			<p>热门产品</p>
		</div>


		<p class="tip">以下优选产品，申请三家以上保证放款。</p>



		<div class="pro">
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<div class="pro_list clearfix">
					<a href="/index.php/index/index/cat/id/<?php echo $vo['id']; ?>">
						<div class="lf"><img src="<?php echo get_thumb($vo['cover']); ?>" alt="<?php echo $vo['names']; ?>"></div>
						<div class="rg">
							<p class="p1 clearfix"><span><?php echo $vo['names']; ?></span>
                              	<span>
                                  	<?php echo $vo['biaoqian']; ?>
                              	</span>
                          	</p>
							<p class="p2 clearfix"><span>可借额度：</span><span><?php echo $vo['money']; ?></span></p>
							<p class="p3 clearfix"><span>参考：利率日<?php echo $vo['yue']; ?></span><span><?php echo $vo['ren']; ?>人已申请</span></p>
						</div>
					</a>
				</div>
          	<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	
		<a href="/index.php/index/index/loan" class="show-more rad">查看更多产品</a>

	<div style="height: 2.6rem;background: #fff;"></div>


  <div class="weui-tabbar" style="position: fixed;max-width: 640px;">
    <a href="/index.php/index/index/index/ts/<?php echo time().rand(0, 15)?>" class="weui-tabbar__item">
      <div class="weui-tabbar__icon" style="background:url('/static/shouye/1.png') no-repeat">
      </div>
      <p class="weui-tabbar__label red">首页</p>
    </a>
    <a href="/index.php/index/index/loan/ts/<?php echo time().rand(0, 15)?>" class="weui-tabbar__item">
      <div class="weui-tabbar__icon" style="background:url('/static/shouye/d1.png') no-repeat">   	
      </div>
      <p class="weui-tabbar__label">贷款</p>
    </a>
    <a href="/index.php/index/index/kefu/ts/<?php echo time().rand(0, 15)?>" class="weui-tabbar__item">
      <div class="weui-tabbar__icon" style="background:url('/static/shouye/k1.png') no-repeat">    	
      </div>
      <p class="weui-tabbar__label">客服</p>
    </a>
    <a href="/index.php/index/index/news/ts/<?php echo time().rand(0, 15)?>" class="weui-tabbar__item">
      <div class="weui-tabbar__icon" style="background:url('/static/shouye/z1.png') no-repeat">
      	   	
      </div>
      <p class="weui-tabbar__label">资讯</p>
    </a>
    <a href="/index.php/index/index/user/ts/<?php echo time().rand(0, 15)?>" class="weui-tabbar__item">
      <div class="weui-tabbar__icon" style="background:url('/static/shouye/w1.png') no-repeat">
      	  	
      </div>
      <p class="weui-tabbar__label">我的</p>
    </a>
  </div>
</div>






<!-- body 最后 -->
  <script type='text/javascript' src='//g.alicdn.com/sj/lib/zepto/zepto.min.js' charset='utf-8'></script>
<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.min.js' charset='utf-8'></script>
<script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
 <script type="text/javascript" charset="utf-8" >
   	  	window.onload=function(){ 
               var	times=$('#time').val();
                if(times>0){
                      var timer=null;
                    timer=setInterval(function(){
                      var day=0,
                        hour=0,
                        minute=0,
                        second=0;//时间默认值
                      if(times > 0){
                        day = Math.floor(times / (60 * 60 * 24));
                        hour = Math.floor(times / (60 * 60));
                        minute = Math.floor(times / 60) - (hour * 60);
                        second = Math.floor(times) - (hour * 60 * 60) - (minute * 60);
                      }
                      if (day <= 9) day = '0' + day;
                      if (hour <= 9) hour = '0' + hour;
                      if (minute <= 9) minute = '0' + minute;
                      if (second <= 9) second = '0' + second;
                      //
                        $('#h').html(hour);
                        $('#i').html(minute);
                       $('#s').html(second);
                      times--;
                    },1000);
                    if(times<0){
                       //window.location.reload();
                      clearInterval(timer);

                    }

                  }else{
                     //window.location.reload();	
                  }	
		} 
  </script>
<script src="/static/shouye/jquery.min.js.下载">

  </script>
<script src="/static/shouye/jquery-weui.min.js.下载"></script>
</body></html>