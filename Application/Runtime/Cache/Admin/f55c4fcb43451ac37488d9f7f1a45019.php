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

        <div class="panel panel-default">
            <div class="panel-header">基本</div>
            <div class="panel-body">
                <div class="row c1">
                    <div class="col-xs-4 col-sm-4 text-l">标题：<?php echo ($data['title']); ?></div>
<!--                     <div class="col-xs-4 col-sm-4 text-l">显示：<?php if($data['is_show']==0): ?>不显示<?php elseif($data['is_show']==1): ?>显示<?php else: endif; ?> </div> -->
                    <div class="col-xs-4 col-sm-4 text-l">添加时间：<?php echo (date('Y-m-d',$data['time'])); ?></div>

                    <div class="col-xs-4 col-sm-4 text-l">栏目名称：<?php echo ($data['cate']); ?></div>

                    <div class="col-xs-4 col-sm-4 text-l">作者：<?php echo ($data['author']); ?></div>

                </div>

            </div> <br/><br/><br/>
        </div>
        <div class="panel panel-default mt-20">
            <div class="panel-header">图片</div>
            <?php if($data['pic'] == null): ?><div class="panel-body">
                    <div class="row c1">
                        <div class="col-xs-4 col-sm-4 text-l">未添加</div>
                    </div>
                </div> <br/>

                <?php else: ?>
                <div class="panel-body">
                    <div class="row c1">
                        <div class="formControls col-xs-12 col-sm-12">
                            <img class="product-thumb" height="" width="" style="max-height: 200px;max-width: 200px; min-width: 100px; min-height:100px" src="/blog<?php echo ($data["pic"]); ?>">
                        </div>
                    </div>
                </div> <br/><br/><br/><br/><br/> <br/><br/><br/><br/><?php endif; ?>
        </div>

        <div class="panel panel-default mt-20">
            <div class="panel-header">详细</div>
            <div class="panel-body">

                <div class="row c1" style="height:10px">
                    <div class="col-xs-12 col-sm-12 text-l">简述：
                        <textarea  cols="" rows="" class="textarea"  style="height: 50px" readonly="true"><?php echo ($data["desc"]); ?></textarea>
                    </div>
                </div>

                <div class="row cl">
                    <div class="formControls col-xs-12 col-sm-12">
                        文章内容： <script id="editor" type="text/plain" style="width:100%;height:400px;"><?php echo ($data['content']); ?></script>
                    </div>
                </div>
            </div>
        </div><br/>

    </article>

    <!--请在下方写此页面业务相关的脚本-->
    <script type="text/javascript" src="/blog/Public/Admin/lib/webuploader/0.1.5/webuploader.min.js"></script>
    <script type="text/javascript" src="/blog/Public/Admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
    <script type="text/javascript" src="/blog/Public/Admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
    <script type="text/javascript" src="/blog/Public/Admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>

    <script type="text/javascript">

        // var picupload=false;

        $(function(){

            var editor = new UE.ui.Editor({scaleEnabled:true});
            var ue = UE.getEditor('editor',{
                // initialFrameWidth :800, //设置编辑器宽度
                initialFrameHeight:300, //设置编辑器高度
                scaleEnabled:true,  //设置不自动调整高度
            });
            window.onload = function(){
                $("#edui1_scale").remove();
            }

        });




    </script>


</body>
</html>