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
<script type="text/javascript" src="/tp_study1/Public/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/tp_study1/Public/Admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/tp_study1/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/tp_study1/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/tp_study1/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/tp_study1/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/tp_study1/Public/Admin/static/h-ui.admin/css/style.css" />
    <link href="/tp_study1/Public/Admin/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="/tp_study1/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->

    <!--/meta 作为公共模版分离出去-->
    <title>后台管理系统</title>
    <meta name="keywords" content="后台管理系统">
    <meta name="description" content="后台管理系统">
</head>

<!--footer-->
<script type="text/javascript" src="/tp_study1/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/tp_study1/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/tp_study1/Public/Admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/tp_study1/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script>




    <article class="page-container">

        <div class="panel panel-default">
            <div class="panel-header">留言详情</div>
            <div class="panel-body">
                <div class="row c1">
                    <div class="col-xs-6 col-sm-6 text-l">留言者：<?php echo ($data['name']); ?></div>

                  <!--   <div class="col-xs-6 col-sm-6 text-l">排&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;序：<?php echo ($data['sort']); ?></div> -->
                    <div class="col-xs-6 col-sm-6 text-l">联系方式：<?php echo ($data['contact']); ?></div>
                    
                    <div class="col-xs-6 col-sm-6 text-l">添加时间：<?php echo (date('Y-m-d',$data['time'])); ?></div>

                    <div class="col-xs-6 col-sm-6 text-l"><br/></div>
                    <div class="col-xs-6 col-sm-6 text-l"><br/></div>
                </div>

                <div class="row c1">
                    <div class="formControls col-xs-12 col-sm-12">
                        留言内容：<?php echo ($data['comment']); ?>
                    </div>

                </div>
            </div> <br/><br/><br/><br/><br/> <br/><br/><br/><br/>
        </div>
    </article>


</body>
</html>