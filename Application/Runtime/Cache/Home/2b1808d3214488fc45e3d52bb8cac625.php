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


<body id="blog">

<hr>
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
            <input type="hidden" id="menu_id" value=[menu]>
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

<hr>


<div class="am-g am-g-fixed blog-fixed" style="background-color: white">
    <div class="am-u-md-8 am-u-sm-12">
        
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><article class="am-g blog-entry-article" >
                <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img" style="height: 200px;width: 400px">
                    <a href="<?php echo U('Article/article_info');?>?id=<?php echo ($vo["id"]); ?>">
                    <img src="/blog<?php echo ($vo["pic"]); ?>" alt="出错请联系管理员" onerror="this.src='/blog/Public/Home/images/article_null.jpg'" class="am-u-sm-12" style="height: 100%;width: 100%;">
                    </a>
                </div>
                <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                    <h1><a href="<?php echo U('Article/article_info');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></h1>
                    <p><?php echo ($vo["desc"]); ?></p>
                    <span class="am-badge am-badge-primary am-radius"><?php echo ($vo["author"]); ?> &nbsp;</span>
                    <span class="am-badge am-badge-success am-radius"><?php echo (date("Y-m-d H:i:s",$vo['time'] )); ?></span>
                    <span class="am-badge am-badge-warning am-radius"><?php echo ($vo["visitor"]); ?></span>
<!--                     <p style="border:1px solid"><a href="" class="">continue reading</a></p> -->
                </div>
            </article><?php endforeach; endif; else: echo "" ;endif; ?>
        <!-- <?php echo (dump($data )); ?> -->
        <!-- <div class="pages"><?php echo ($page); ?></div> -->
        <div class="pages" ><ul style="padding: 0"><?php echo ($page); ?></ul></div> 
    </div>

    <div class="am-u-md-4 am-u-sm-12 blog-sidebar">
         <style>
    #hamster ul, menu, dir {
    display: block;
    list-style-type: disc;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    -webkit-padding-start: 40px;
    }
</style>

<?php if($ismobile == 1): ?><div></div>
<?php else: ?>
    <div class="blog-sidebar-widget blog-bor">
        <object type="application/x-shockwave-flash" 
            style="outline:none;" 
            data="/blog/Public/Home/swf/hamster.swf"
            width="280" height="180" 
            id="__wow_video_player__463292481" 
            title="Adobe Flash Player">
            <param name="movie" value="/blog/Public/Home/swf/hamster.swf">
            <param name="AllowScriptAccess" value="always">
            <param name="wmode" value="opaque">
        </object>
    </div><?php endif; ?>

<div class="blog-clear-margin blog-sidebar-widget blog-bor am-g ">
    <h2 class="blog-title"><span>推荐文章</span></h2>
    <div class="am-u-sm-12 blog-clear-padding">
        <?php if(is_array($rand_article)): $i = 0; $__LIST__ = $rand_article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Article/article_info');?>?id=<?php echo ($vo['id']); ?>" class="blog-tag"><?php echo ($vo['title']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>

<div class="blog-clear-margin blog-sidebar-widget blog-bor am-g" >
    <h2 class="blog-title"><span>友情链接</span></h2>
        <div class="am-u-sm-12 blog-clear-padding">
        <?php if(is_array($link)): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>" class="blog-tag" target="view_window"><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
       
        </div>
</div>

<div class="blog-sidebar-widget blog-bor">
    <h2 class="blog-text-center blog-title"><span>联系我</span></h2>
    <p>
        <a href=""><span class="am-icon-weixin am-icon-fw blog-icon"></span></a>
        <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
        <a href="https://github.com/" target="view_window"><span class="am-icon-github am-icon-fw blog-icon" ></span></a>
        <a href="https://weibo.com/u/2584224757/home?topnav=1&wvr=6" target="view_window"><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
    </p>
</div>

<!-- <script src="/blog/Public/Home/js/clock.js"></script>
<script src="/blog/Public/Home/js/clockjs.js"></script> -->






    </div>
</div>
    
    <div data-am-widget="gotop" class="am-gotop am-gotop-fixed" >
        <a href="#top" title="">
            <img class="am-gotop-icon-custom" src="/blog/Public/Home/gif/goTop.gif" />
        </a>
    </div>
    <!-- <?php echo (dump($rand_article )); ?> -->
    
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


<!--[if (gte IE 9)|!(IE)]><!-->

<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/blog/Public/Home/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="/blog/Public/Home/js/amazeui.min.js"></script>
</body>
</html>