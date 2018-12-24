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

        <form class="form form-horizontal" id="form_article_add" method='post' enctype="multipart/form-data">

            <div class="panel panel-default mt-20">
                <div class="panel-header">新增</div>
                <div class="panel-body">
                    
                    <input type="hidden" value="" id="image_url" name="image_url">

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>图片：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input  name="image[]" class="form-control" type="file" accept="image/png,image/jpeg,image/gif">
                        </div>
                    </div>

                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">简述：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text" value="" placeholder="" id="desc" name="desc">
                        </div>
                    </div>

                    
                </div> <br/>
            </div><br/>

            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 提交</button>
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
            // window.UEDITOR_HOME_URL = "/blog/Public/Uploads/";//配置路径设定为UEditor所放的位置  
            // var editor = new UE.ui.Editor({scaleEnabled:true});
            // var ue = UE.getEditor('editor',{
            //     // initialFrameWidth :800, //设置编辑器宽度
            //     initialFrameHeight:300, //设置编辑器高度
            //     scaleEnabled:true,  //设置不自动调整高度
            //     serverUrl: "<?php echo U('Article/save_info');?>" 
            // });
            // // window.onload = function(){
            // //     $("#edui1_scale").remove();
            // // }

            $("#form_article_add").validate({
                onkeyup:false,
                focusCleanup:true,
                success:"valid",
                submitHandler:function(form){
                    var formData = new FormData($( "#form_article_add" )[0]);

                    $.ajax({
                        url:"<?php echo U('Photo/photo_add_validate');?>",
                        type: "POST",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success:function(res){
                            console.log(res);
                            if (res == 1) {alert("添加成功"); window.location.href = "<?php echo U('Article/index');?>";}
                            else if (res == 2) {alert("添加失败");}

                            else if (res == 11) {alert("标题名称为空");}
                            else if (res == 12) {alert("作者为空");}
                            else if (res == 13) {alert("描述为空");}
                            else if (res == 14) {alert("描述为空");}
                            else if (res == 15) {alert("链接为空");}

                            else if (res == 16) {alert("图片为空");}
                            else if (res == 17) {alert("内容为空");}

                            else if (res == 21) {alert("提交失败");}

                            else if (res == 22) {alert("标题名称存在");}

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