<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"/www/wwwroot/a.fhhcpu.top/public/../application/index/view/index/news.html";i:1550824066;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0037)https://dk.yunruan.ltd/community.html -->
<html lang="zh-CN" class="pixel-ratio-3 retina ios ios-9 ios-9-1 ios-gt-8 ios-gt-7 ios-gt-6"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>资讯-陈 测试站点</title>

	<meta name="keywords" content="陈 测试站点">
	<meta name="description" content="陈 测试站点-为你提供借款融资一站式解决方案">

	<meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- head 中 -->
	<link rel="stylesheet" href="/static/news/weui.min.css">
	<link rel="stylesheet" href="/static/news/jquery-weui.min.css">
	<link rel="stylesheet" type="text/css" href="/static/news/main.css">
	<link rel="stylesheet" type="text/css" href="/static/news/font-awesome.min.css">
	<script src="/static/news/jquery1.42.min.js.下载" type="text/javascript" charset="utf-8"></script>
	<script src="/static/news/jquery.SuperSlide.2.1.3.js.下载" type="text/javascript" charset="utf-8"></script>
	<script src="/static/news/TouchSlide.1.1.js.下载" type="text/javascript" charset="utf-8"></script>
</head>
<body>


<div id="app">
	


		<div class="header">
			<div class="header-nav">
				<a style="float:left;padding-left: .5rem" href="javascript:history.go(-1);">
                <img  src="/static/cat/y.png">
              </a>
				<span>资讯</span>
			</div>

		</div>
		<div style="height: 2rem;"></div>


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
                      <ul style="width: 1656px; position: relative; overflow: hidden; padding: 0px; margin: 0px; transition-duration: 200ms; transform: translate(0px, 0px) translateZ(0px);">
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

		<p class="news-tips">贷款资讯</p>
		


		<div class="news">
			
		<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<div class="news_list clearfix">
					<a href="/index.php/index/index/cry/id/<?php echo $vo['id']; ?>">
						<p class="p1"><?php echo $vo['names']; ?></p>
						<p class="p2"><time class="gray"><?php echo date('Y-m-d H:i',$vo['create_time'])?></time><span class="gray"><?php echo $vo['num']; ?>阅读</span></p>
					</a>
			</div>		
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>






	<div style="height: 3rem;background: #f7f5f5;"></div>

 <div class="weui-tabbar" style="position: fixed;max-width: 640px;">
    <a href="/index.php/index/index/index" class="weui-tabbar__item">
      <div class="weui-tabbar__icon" style="background:url('/static/shouye/2.png') no-repeat">
      </div>
      <p class="weui-tabbar__label ">首页</p>
    </a>
    <a href="/index.php/index/index/loan" class="weui-tabbar__item">
      <div class="weui-tabbar__icon" style="background:url('/static/shouye/d1.png') no-repeat">   	
      </div>
      <p class="weui-tabbar__label">贷款</p>
    </a>
    <a href="/index.php/index/index/kefu" class="weui-tabbar__item">
      <div class="weui-tabbar__icon" style="background:url('/static/shouye/k1.png') no-repeat">    	
      </div>
      <p class="weui-tabbar__label">客服</p>
    </a>
    <a href="/index.php/index/index/news" class="weui-tabbar__item">
      <div class="weui-tabbar__icon" style="background:url('/static/shouye/z2.png') no-repeat">
      	   	
      </div>
      <p class="weui-tabbar__label red">资讯</p>
    </a>
    <a href="/index.php/index/index/user" class="weui-tabbar__item">
      <div class="weui-tabbar__icon" style="background:url('/static/shouye/w1.png') no-repeat">
      	  	
      </div>
      <p class="weui-tabbar__label">我的</p>
    </a>
  </div>
</div>






<!-- body 最后 -->
<script src="/static/news/main.js.下载"></script>
<script src="/static/news/jquery.min.js.下载"></script>
<script src="/static/news/jquery-weui.min.js.下载"></script>
</body></html>