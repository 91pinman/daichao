<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"/www/wwwroot/a.fhhcpu.top/public/../application/index/view/index/loan.html";i:1550916666;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0032)https://dk.yunruan.ltd/loan.html -->
<html lang="zh-CN" class="pixel-ratio-2 retina android android-6 android-6-0"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>简单贷-<?php echo $title; ?></title>

	<meta name="keywords" content="简单贷">
	<meta name="description" content="简单贷">

	<meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- head 中 -->
	<link rel="stylesheet" href="/static/loan/weui.min.css">
	<link rel="stylesheet" href="/static/loan/jquery-weui.min.css">
	<link rel="stylesheet" type="text/css" href="/static/loan/main.css">
	<link rel="stylesheet" type="text/css" href="/static/loan/font-awesome.min.css">
	<script src="/static/loan/jquery1.42.min.js.下载" type="text/javascript" charset="utf-8"></script>
	<script src="/static/loan/jquery.SuperSlide.2.1.3.js.下载" type="text/javascript" charset="utf-8"></script>
	<script src="/static/loan/TouchSlide.1.1.js.下载" type="text/javascript" charset="utf-8"></script>

</head>
<body>


<div id="app">
	
		<div class="header">
			<div class="header-nav">
				<a style="float:left;padding-left: .5rem" href="javascript:history.go(-1);">
                <img  src="/static/cat/y.png">
              </a>
				<span><?php echo $title; ?></span>
			</div>

			<div class="search">
		      <div class="weui-cell weui-cell_select">
		        <div class="weui-cell__bd">
		          <select class="weui-select" id="sort" name="sort" style="height: auto;line-height: inherit;">
		            <?php if(is_array($class) || $class instanceof \think\Collection || $class instanceof \think\Paginator): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    	 <option  value="/index.php/index/index/loan/aid/<?php echo $vo['id']; ?>"  <?php echo $vo['sel']; ?>><?php echo $vo['names']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
		          </select>
		        </div>
		      </div>

			</div>
		</div>

		<div style="height: 3.6rem;"></div>
		<div class="pro" id="pro">
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






	<div style="height: 3rem;background: #fff;"></div>


    <div class="weui-tabbar" style="position: fixed;max-width: 640px;">
    <a href="/index.php/index/index/index/ts/<?php echo time().rand(0, 15)?>" class="weui-tabbar__item">
      <div class="weui-tabbar__icon" style="background:url('/static/shouye/2.png') no-repeat">
      </div>
      <p class="weui-tabbar__label ">首页</p>
    </a>
    <a href="/index.php/index/index/loan/ts/<?php echo time().rand(0, 15)?>" class="weui-tabbar__item">
      <div class="weui-tabbar__icon" style="background:url('/static/shouye/d2.png') no-repeat">   	
      </div> 
      <p class="weui-tabbar__label red">贷款</p>
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




<script type="text/javascript">


	//1 智能 2额度 3放款速度 4上新 5申请成功

	$('#sort').change(function(){
		window.location.href=$(this).val();
	})

</script>

<!-- body 最后 -->
<script src="/static/loan/main.js.下载"></script>
<script src="/static/loan/jquery.min.js.下载"></script>
<script src="/static/loan/jquery-weui.min.js.下载"></script>
</body></html>