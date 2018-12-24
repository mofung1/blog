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
            <div class="panel-header">基本</div>
            <div class="panel-body">
                <div class="row c1">
                    <div class="col-xs-4 col-sm-4 text-l">用户名：<?php echo ($data["admin_name"]); ?></div>
                    <div class="col-xs-4 col-sm-4 text-l">添加时间：<?php if($data['add_time'] == 0): ?>-- <?php else: ?> <?php echo (date('Y-m-d',$data['add_time'])); endif; ?></div>

                    <div class="col-xs-4 col-sm-4 text-l">最后登录时间：<?php if($data['last_login'] == 0): ?>-- <?php else: ?> <?php echo (date('Y-m-d',$data['last_login'])); endif; ?></div>
                    <div class="col-xs-4 col-sm-4 text-l">邮箱：<?php echo ($data["email"]); ?></div>

                    <div class="col-xs-4 col-sm-4 text-l">创建人：<?php echo ($data["parent_id"]); ?></div>
                    <div class="col-xs-4 col-sm-4 text-l">最后登录IP：<?php echo ($data["last_ip"]); ?></div>

                    <div class="col-xs-4 col-sm-4 text-l">职责：<?php echo ($data["admin_desc"]); ?></div>
                </div>

            </div> <br/><br/><br/>

        </div>

        <div class="panel panel-default mt-20">
            <div class="panel-header">权限</div>
            <div class="panel-body">
                <div class="row c1">
                    <div class="col-xs-4 col-sm-4 text-l">权限：</div>

                </div>

            </div> <br/><br/><br/>

        </div>

    </article>


    <!--请在下方写此页面业务相关的脚本-->
    <script type="text/javascript" src="/tp_study1/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
    <script type="text/javascript" src="/tp_study1/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
    <script type="text/javascript" src="/tp_study1/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
    <script type="text/javascript" src="/tp_study1/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
    <script type="text/javascript">

        $(function(){

            $("#form_admin_edit").validate({
                onkeyup:false,
                focusCleanup:true,
                success:"valid",
                submitHandler:function(form){

                    $.ajax({
                        url:"<?php echo U('Database/admin_update_validate');?>",
                        type: "POST",
                        data: $("#form_admin_edit").serialize(),
                        success:function(res){

                            if (res == 1) {alert("修改成功"); layer_close();}
                            else if (res == 2) {alert("修改失败");}
                            else if (res == 3) {alert("用户不存在");}

                            else if (res == 11) {alert("名称为空");}
                            else if (res == 12) {alert("地址为空");}
                            else if (res == 13) {alert("排序空");}

                        },
                        error:function(res){
                            alert("提交失败");
                        }
                    });
                }
            });

        });

    </script>



</body>
</html>