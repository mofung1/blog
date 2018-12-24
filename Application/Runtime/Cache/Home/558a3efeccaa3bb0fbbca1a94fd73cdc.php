<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>mofung1-blog</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="icon" type="image/png" href="/blog/Public/Home/i/favicon.png">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="/blog/Public/Home/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="apple-touch-icon-precomposed" href="/blog/Public/Home/i/app-icon72x72@2x.png">
    <meta name="msapplication-TileImage" content="/blog/Public/Home/i/app-icon72x72@2x.png">
    <meta name="msapplication-TileColor" content="#0e90d2">
    <link rel="stylesheet" href="/blog/Public/Home/css/amazeui.min.css">
    <link rel="stylesheet" href="/blog/Public/Home/css/app.css">
    <link rel="stylesheet" href="/blog/Public/Home/css/player.css">
    <link rel="stylesheet" href="/blog/Public/Home/css/yezi.css">
    <link rel="stylesheet" href="/blog/Public/Home/css/pages.css">
</head>


<style>
    .current{color: #10D07A;}
    /*body{background-image:url('/blog/Public/Home/images/bg.jpg');}*/
</style>

<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
<div class="am-u-sm-8 am-u-sm-centered">
    <img width="200" src="/blog/Public/Home/images/logo.png" alt="mofung1 Logo" style="height: 60px" />
</div>
</header>

<div style="background-color: white">
<nav class="am-g am-g-fixed blog-fixed blog-nav" style="padding: 10px;">
<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
    <div class="am-collapse am-topbar-collapse" id="blog-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav">
            <input type="hidden" id="menu_id" value=3>
            <li><a class="menu_nav" href="<?php echo U('Index/index');?>">主页</a></li>
            <li><a class="menu_nav" href="<?php echo U('Article/index');?>">php</a></li>
            <li><a class="menu_nav" href="<?php echo U('Photo/index');?>">相册</a></li>
            <li><a class="menu_nav" href="<?php echo U('Comment/index');?>">留言板</a></li>
 
        </ul>

        <form class="am-topbar-form am-topbar-right am-form-inline" role="search" action="<?php echo U('Base/search_list');?>" method="post">
            <div class="am-form-group">
                <input type="text" class="am-form-field am-input-sm" placeholder="搜索" name="search">
            </div>
        </form>

    </div>
</nav>
</div>
<script src="/blog/Public/Home/js/jquery-3.1.1.min.js"></script>
<script>
    //主菜单选择
    $(function(){
        $($('.menu_nav')[parseInt($('#menu_id').val())-1]).addClass('current').siblings().removeClass('current');
    });

</script>

<body id="blog-article-sidebar" >

<!-- <div class="am-g am-g-fixed blog-fixed blog-content" style="background-color: white">
    <figure data-am-widget="figure" class="am am-figure am-figure-default "   data-am-figure="{  pureview: 'false' }">
        <div id="container">  
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div><img src="/blog<?php echo ($vo["photo"]); ?>" ><h3 style="text-align: center"><?php echo ($vo["content"]); ?></h3></div><?php endforeach; endif; else: echo "" ;endif; ?>   
        </div> 
    </figure>

</div> -->
<div class="am-g am-g-fixed blog-fixed blog-content" style="background-color: white">
  	<ul data-am-widget="gallery" class="am-gallery  am-avg-sm-2
  am-avg-md-3 am-avg-lg-4 am-gallery-bordered" data-am-gallery="{pureview:{target: 'a'}}">
	  	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
		        <div class="am-gallery-item">
		            <a href="/blog<?php echo ($vo["photo"]); ?>" class="">
		              <img src="/blog<?php echo ($vo["photo"]); ?>"  alt="失败"/>
		                <h3 class="am-gallery-title"><?php echo ($vo["content"]); ?></h3>
		                <div class="am-gallery-desc"><?php echo (date("Y-m-d,H:i:s",$vo['add_time'] )); ?></div>
		            </a>
		        </div>
	      	</li><?php endforeach; endif; else: echo "" ;endif; ?>	
  	</ul>
  	
  	<div class="pages"><?php echo ($page); ?></div>
</div>


<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/blog/Public/Home/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/blog/Public/Home/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<div id="QPlayer">
    <div id="pContent">
        <div id="player">
            <span class="cover"></span>
            <div class="ctrl">
                <div class="musicTag marquee">
                    <strong>Title</strong>
                     <span> - </span>
                    <span class="artist">Artist</span>
                </div>
                <div class="progress">
                    <div class="timer left">0:00</div>
                    <div class="contr">
                        <div class="rewind icon"></div>
                        <div class="playback icon"></div>
                        <div class="fastforward icon"></div>
                    </div>
                    <div class="right">
                        <div class="liebiao icon"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ssBtn">
                <div class="adf"></div>
        </div>
    </div>
    <ol id="playlist"></ol>
</div>



<script>

function bgChange(){
    var lis= $('.lib');
    for(var i=0; i<lis.length; i+=2)
    lis[i].style.background = 'rgba(246, 246, 246, 0.5)';
}
window.onload = bgChange;
</script>

<script>
    var playlist = [
        {title:"追光者",artist:"岑宁儿",mp3:"/blog/Public/Home/MP3/岑宁儿 - 追光者.mp3",cover:"/blog/Public/Home/images/song.jpg",},
        {title:"那个男孩",artist:"汪苏泷",mp3:"/blog/Public/Home/MP3/汪苏泷 - 那个男孩.mp3",cover:"/blog/Public/Home/images/song.jpg",},
        ];
    var isRotate = true;
    var autoplay = false;
</script>

    
<footer class="blog-footer" >
	<!-- <div class="blog-text-center">你的ip地址是<?php echo ($ip); ?></div> -->
    <div class="blog-text-center">@2018.mofung1</div>
</footer>
   


    <script src="/blog/Public/Home/js/jquery.marquee.min.js"></script>
    <script src="/blog/Public/Home/js/player.js"></script>
    <script src="/blog/Public/Home/js/jquery.min.js"></script>
    <script src="/blog/Public/Home/js/jquery.js"></script>
<script src="/blog/Public/Home/js/amazeui.min.js"></script>
<script src="/blog/Public/Home/js/pinto.min.js"></script>
<script src="/blog/Public/Home/js/img.js"></script>

</body>
</html>