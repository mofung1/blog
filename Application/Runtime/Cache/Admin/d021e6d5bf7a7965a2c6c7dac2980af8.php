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
        <form action="" method="post" class="form form-horizontal" id="form_friend_link_add">
            <input type="hidden" value="" id="link_logo" name="link_logo">
            <div class="panel panel-default">
                <div class="panel-header">基本</div>
                <div class="panel-body">
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>名称：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text" value="" placeholder="" id="title" name="title">
                        </div>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>地址：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text" value="" placeholder="" id="url" name="url">
                        </div>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>排序：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text" value="" placeholder="" id="sort" name="sort">
                        </div>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>描述：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <textarea name="desc" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true"  ></textarea>
                            <p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
                        </div>
                    </div>

 <!--                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>图片：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input  name="pic" class="form-control" type="file" accept="image/png,image/jpeg,image/gif">
                        </div>
                    </div> -->

<!--                     <div class="row cl">
                        <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                            <button class="btn btn-secondary radius" id="btm_pic_upload"> 上传图片 </button> 图片类型：jpg,png,gif
                        </div>
                    </div> -->

                    <div class="row cl">
                        <div class="col-xs-4 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                            <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                        </div>
                    </div>

                </div>
            </div>

        </form>

    </article>


    <!--请在下方写此页面业务相关的脚本-->
    <script type="text/javascript" src="/blog/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
    <script type="text/javascript" src="/blog/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
    <script type="text/javascript" src="/blog/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
    <script type="text/javascript" src="/blog/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
    <script type="text/javascript">

        // var picupload=false;

        $(function(){


            $("#form_friend_link_add").validate({
                onkeyup:false,
                focusCleanup:true,
                success:"valid",
                submitHandler:function(form){

                    // if (picupload) {picupload = false; return;}

                    $.ajax({
                        url:"<?php echo U('Link/link_add_validate');?>",
                        type: "POST",
                        data: $("#form_friend_link_add").serialize(),
                        success:function(res){

                            if (res == 1) {alert("添加成功"); layer_close();}
                            else if (res == 2) {alert("添加失败");}

                            else if (res == 11) {alert("名称为空");}
                            else if (res == 12) {alert("地址为空");}

                        },
                        error:function(res){
                            alert("提交失败");
                        }
                    });

                }
            });

            // $('#btm_pic_upload').click(function () {
            //     var formData = new FormData($("#form_friend_link_add")[0]);

            //     picupload = true;

            //     $.ajax({
            //         url: "<?php echo U('Sys/friend_link_pic_upload');?>" ,
            //         type: 'POST',
            //         data: formData,
            //         async: false,
            //         cache: false,
            //         contentType: false,
            //         processData: false,
            //         success: function (res) {

            //             $("#link_logo").val(res); alert("上传成功");
            //         },
            //         error: function (res) {
            //             alert("图片上传失败");
            //         }
            //     });
            // });
        });
    </script>



</body>
</html>