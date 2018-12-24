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




    <article class="page-container">
        <form class="form form-horizontal" id="form_pwd_edit">
            <input type="hidden" name="id" value="<?php echo ($data['id']); ?>">
            <input type="hidden" name="admin_name" value="<?php echo ($data['admin_name']); ?>">
            <div class="panel panel-default">
                <div class="panel-header">基本</div>
                <div class="panel-body">
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">用户名：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <?php echo ($data['admin_name']); ?>
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>原始密码：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="password" class="input-text" id="old_pwd" name="old_pwd">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>密码：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="password" class="input-text" id="password" name="password">
                        </div>
                    </div>

                    <div class="row cl">
                        <div class="col-xs-4 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                            <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                        </div>
                    </div>

                </div>
                <br><br>
            </div>
        </form>

    </article>


    <!--请在下方写此页面业务相关的脚本-->
    <script type="text/javascript" src="/blog/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
    <script type="text/javascript" src="/blog/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
    <script type="text/javascript" src="/blog/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
    <script type="text/javascript" src="/blog/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>

    <script type="text/javascript">

        $(function(){

            $("#form_pwd_edit").validate({
                onkeyup:false,
                focusCleanup:true,
                success:"valid",
                submitHandler:function(form){

                    $.ajax({
                        url:"<?php echo U('Admin/admin_pwd_validate');?>",
                        type: "POST",
                        data: $("#form_pwd_edit").serialize(),
                        success:function(res){

                            if (res == 1) {alert('修改成功'); layer_close();}
                            else if (res == 2) {alert('修改失败');}
                            else if (res == 3) {alert('用户不存在');}

                            else if (res == 11) {alert('原始密码为空');}
                            else if (res == 12) {alert('新密码为空');}

                            else if (res == 21) {alert('原始密码错误');}
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