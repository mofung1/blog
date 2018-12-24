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
        <form action="" method="post" class="form form-horizontal" id="form_category_edit">
            <input type="hidden" value="<?php echo ($data['id']); ?>" id="id" name="id">

            <div class="panel panel-default">
                <div class="panel-header">详细</div>
                <div class="panel-body">

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>栏目名称：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text" value="<?php echo ($data['catename']); ?>" placeholder="" id="catename" name="catename">
                        </div>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>导航栏显示：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <div class="radio-box">
                                <input type="radio" name="show_in_nav" value = 0 <?php if($data['show_in_nav'] == 0): ?>checked <?php elseif($data['show_in_nav'] == 1): ?> <?php else: endif; ?>>
                                <label for="show_in_nav1">隐藏</label>
                            </div>
                            <div class="radio-box">
                                <input type="radio" name="show_in_nav" value = 1 <?php if($data['show_in_nav'] == 0): elseif($data['show_in_nav'] == 1): ?> checked <?php else: endif; ?>>
                                <label for="show_in_nav2">显示</label>
                            </div>
                        </div>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>排序：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text" value="<?php echo ($data['sort']); ?>" placeholder="" id="sort" name="sort">
                        </div>
                    </div>


                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>描述：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <textarea name="catedesc" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="$.Huitextarealength(this,200)"><?php echo ($data['catedesc']); ?></textarea>
                            <p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
                        </div>
                    </div>

                    <div class="row cl">
                        <div class="col-xs-4 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                            <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                        </div>
                    </div>

                </div> <br/>
            </div>

        </form>
    </article>


    <!--请在下方写此页面业务相关的脚本-->
    <script type="text/javascript" src="/tp_study1/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
    <script type="text/javascript" src="/tp_study1/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
    <script type="text/javascript" src="/tp_study1/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
    <script type="text/javascript" src="/tp_study1/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>

    <script type="text/javascript">

        $(function(){

            $("#form_category_edit").validate({
                onkeyup:false,
                focusCleanup:true,
                success:"valid",
                submitHandler:function(form){

                    $.ajax({
                        url:"<?php echo U('Article/category_update_validate');?>",
                        type: "POST",
                        data: $("#form_category_edit").serialize(),
                        success:function(res){

                            if (res == 1) {alert("修改成功"); parent.location.reload();}
                            else if (res == 2) {alert("修改失败");}

                            else if (res == 11) {alert("栏目名为空");}

                            else if (res == 21) {alert("栏目名存在");}
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