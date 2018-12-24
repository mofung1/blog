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


    <link rel="stylesheet" href="/blog/Public/Home/css/comment.css">
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
            <input type="hidden" id="menu_id" value=4>
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

    <style>

    </style>
<body id="blog">

<div class="am-g am-g-fixed blog-fixed" style="background-color: white">
    <div class="am-u-md-8 am-u-sm-12">
        <?php if(data == null): ?><div>暂无留言</div>
            <?php else: ?>
            <!-- <div class="scroll-box" style="height:400px;overflow-y:auto"> -->
            <!-- <div class="scroll-box" style="height:400px;">
                <ul>
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php echo ($vo["name"]); ?>：<?php echo ($vo["comment"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div> -->

            <div class="list-box" style="border: 1px solid #EEE;height: 550px;overflow:hidden;">
                <div data-am-widget="list_news" class="am-list-news am-list-news-default" style="height: 550px;overflow-y: auto;">
                  <!--列表标题-->
                    <div class="am-list-news-hd am-cf">
                        <h2>全部留言</h2>
                    </div>

                    <div class="am-list-news-bd">
                        <ul class="am-list">
                            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="am-g" style="width: 100%;word-wrap:break-word; word-break:break-all; overflow: hidden;  ">
                                    <a href="##"><i style="color: red"><?php echo ($vo["name"]); ?></i>：<?php echo ($vo["comment"]); ?></a>
                                    <span style="color:#999999"><?php echo (date("Y-m-d H:m:s",$vo['time'] )); ?></span>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pages" ><ul style="padding: 0"><?php echo ($page); ?></ul></div><?php endif; ?>
        
<br>
        <form action="" class="am-form am-g" id="comment_form">
            <h3 class="blog-comment">评论</h3>
                <fieldset>
                    <div class="am-form-group am-u-sm-4 blog-clear-left">
                      <input type="text" class="" name="name" placeholder="名字">
                    </div>
                    <div class="am-form-group am-u-sm-4">
                      <input type="email" class="" name="contact" placeholder="邮箱">
                    </div>
                
                    <div class="am-form-group">
                      <textarea class="" rows="5" name="comment" placeholder="请写下你的留言吧"></textarea>
                    </div>
                
                    <p><button type="submit" class="am-btn am-btn-default" id="btn">发表评论</button></p>
                </fieldset>
        </form>

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
<!-- content end -->

    
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
<!-- <script src="/blog/Public/Home/js/comment.js"></script> -->
<script>
    $("#btn").click(function(){
        var form = decodeURIComponent($("#comment_form").serialize(),true);

        $.ajax({
            url:"<?php echo U('Comment/comment_validate');?>",
            data:form,
            type:"POST",
            success:function(res) {
                if (res == 1) {alert("留言成功");}
                else if (res == 21) {alert("请填写你的姓名");}
                else if (res == 22) {alert("请填写你的联系方式");}
                else if (res == 23) {alert("请填写你的留言");}
                else if (res == 2) {alert("出错了,请联系管理员");}
                else {alert("出错了,请联系管理员");}
           },
            error:function(res){
                console.log("提交失败");
            }
        });
    });
</script>
</body>
</html>