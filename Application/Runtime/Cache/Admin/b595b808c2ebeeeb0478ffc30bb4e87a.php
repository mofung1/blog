<?php if (!defined('THINK_PATH')) exit();?>﻿<!--head-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/blog/Public/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/blog/Public/Admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/blog/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/blog/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/blog/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/blog/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/blog/Public/Admin/static/h-ui.admin/css/style.css" />
    <link href="/blog/Public/Admin/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="/blog/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->

    <!--/meta 作为公共模版分离出去-->
    <title>后台管理系统</title>
    <meta name="keywords" content="后台管理系统">
    <meta name="description" content="后台管理系统">
</head>

<!--主菜单-->
<!--一级菜单-->
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="<?php echo U('Index/index');?>">后台</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="<?php echo U('Index/index');?>">后台</a>
			<span class="logo navbar-slogan f-l mr-10 hidden-xs">V1.0</span>
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>

			<!--快捷设置-->
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<!--管理员-->
					<li>管理员</li>
					<li class="dropDown dropDown_hover">
						<a href="#" class="dropDown_A"><?php echo ($admin); ?> <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onClick="logout()">退出</a></li>
						</ul>
					</li>
					<!--消息-->
<!-- 					<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li> -->
					<!--皮肤-->
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>

		</div>
	</div>
</header>


<!--子菜单-->
<!--二级菜单-->
<aside class="Hui-aside">
	<!--平台菜单-->
	<div class="menu_dropdown bk_2">
		<!--会员管理-->
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe62c;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo U('Admin/admin_list');?>" data-title="管理员列表" href="javascript:void(0)" id="guanliyuan">管理员列表</a></li>  
				</ul>
			</dd>
		</dl>

		<!--栏目管理-->
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe681;</i> 栏目管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo U('Cate/category_list');?>" data-title="栏目列表" href="javascript:void(0)">栏目列表</a></li>
					<li><a data-href="<?php echo U('Cate/category_add');?>" data-title="栏目添加" href="javascript:void(0)">栏目添加</a></li>
				</ul>
			</dd>
		</dl>

		<!--文章管理-->
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe616;</i> 内容管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo U('Carousel/carousel_list');?>" data-title="轮播图" href="javascript:void(0)">轮播图</a></li>
					<li><a data-href="<?php echo U('Article/index');?>" data-title="文章列表" href="javascript:void(0)">文章列表</a></li>
					<li><a data-href="<?php echo U('Photo/photo_list');?>" data-title="图片列表" href="javascript:void(0)">图片列表</a></li>
				</ul>
			</dd>
		</dl>

		<!--系统管理-->
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe692;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo U('Comment/comment_list');?>" data-title="系统管理" href="javascript:void(0)">留言列表</a></li>
					<li><a data-href="<?php echo U('Link/link_list');?>" data-title="系统管理" href="javascript:void(0)">友情链接</a></li>
					<li><a data-href="<?php echo U('Database/database_list');?>" data-title="系统管理" href="javascript:void(0)">数据列表</a></li>
				</ul>
			</dd>
		</dl>

	</div>





</aside>


<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>

<script type="text/javascript">



</script>

<!--主窗口-->
<!--主窗口-->
<section class="Hui-article-box" style="top: 10px">
    <!--导航标签-->
    <div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
        <div class="Hui-tabNav-wp" >
            <ul id="min_title_list" class="acrossTab cl">
                <li class="active">
                    <span title="主页" data-href="welcome.html">主页</span>
                    <em></em></li>
            </ul>
        </div>
        <div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
    </div>

    <!--内容-->
    <div id="iframe_box" class="Hui-article">
        <div class="show_iframe">
            <div style="display:none" class="loading"></div>
            <iframe scrolling="yes" frameborder="0" src="<?php echo U('Index/welcome');?>"></iframe>
        </div>
    </div>

</section>

<!--tab菜单-->
<div class="contextMenu" id="Huiadminmenu">
    <ul>
        <li id="closethis">关闭当前 </li>
        <li id="closeall">关闭全部 </li>
    </ul>
</div>

<!--footer-->
<script type="text/javascript" src="/blog/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/blog/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/blog/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/blog/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/blog/Public/Admin/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript">

    $(function(){
        $("body").Huitab({
            tabBar:".navbar-wrapper .navbar-levelone",
            tabCon:".Hui-aside .menu_dropdown",
            className:"current",
            index:0,
        });
    });

    function logout(){
        $.ajax({
            url:"<?php echo U('Login/logout_validate');?>",
            type: "POST",
            data: {},
            success:function(res){
                console.log(res);
                if (res) {window.location.href = "<?php echo U('Login/index');?>";}
            },
            error:function(res){
                alert("提交失败！");
            }
        });
    }

</script>

</body>
</html>