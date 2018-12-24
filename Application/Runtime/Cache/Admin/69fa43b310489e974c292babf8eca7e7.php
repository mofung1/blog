<?php if (!defined('THINK_PATH')) exit();?><!--head-->
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

<!--footer-->
<script type="text/javascript" src="/blog/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/blog/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/blog/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/blog/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script>




	<!--导航标题-->
	<!--导航标题-->
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 后台
    <span class="c-gray en">&gt;</span> 首页
    <span class="c-gray en">&gt;</span> 
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>

	<div class="page-container">
		<p class="f-20 text-success">后台管理系统！</p>

		<table class="table table-border table-bordered table-bg mt-20">
			<thead>
			<tr>
				<th colspan="2" scope="col">服务器信息</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<th width="30%">系统版本</th>
				<td><span id="lbServerName">1.0</span></td>
			</tr>
			<tr>
				<td>客户端IP</td>
				<td><?php echo ($ip); ?></td>
			</tr>
			<tr>
				<td>服务端IP </td>
				<td><?php echo ($server_ip); ?></td>
			</tr>
			<tr>
				<td>PHP版本 </td>
				<td><?php echo ($php_version); ?></td>
			</tr>
			<tr>
				<td>服务器操作系统 </td>
				<td><?php echo ($php_os); ?></td>
			</tr>
			<tr>
				<td>服务端信息 </td>
				<td><?php echo ($server); ?></td>
			</tr>
			</tbody>
		</table>
	</div>



</body>
</html>