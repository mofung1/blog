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
    <span class="c-gray en">&gt;</span> 内容管理
    <span class="c-gray en">&gt;</span> 相册列表
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>

    

    <!--内容-->
    <div class="page-container">
        
        <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l">
        <a href="javascript:;" onclick="add(0)" class="btn btn-danger radius">新增相片</a>
    </div>

        <div class="mt-20">
            <table class="table table-border table-bordered table-hover table-bg table-sort" style="l">
                <thead>
                    <tr class="text-c">
                        <th width="40">序号</th>          <!--1-->
                        <th width="80">图片</th>         <!--3-->
                        <th width="80">简述</th>          <!--7-->
                        <th width="80">时间</th>          <!--6-->
                        <th width="80">操作</th>         <!--8-->
                    </tr>
                </thead>

                <tbody>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c">
                        <td><?php echo ($i); ?></td>
                        <td><img class="product-thumb" height="" width="" style="max-height: 200px;max-width: 200px; min-width: 100px; min-height:100px" src="/blog<?php echo ($vo["photo"]); ?>"></td>
                        <td><?php echo ($vo["content"]); ?></td>
                        <td><?php echo (date('Y-m-d',$vo["add_time"])); ?></td>
                        <td class="td-manage">
                            <a title="删除" href="javascript:;" onclick="photo_del(this,<?php echo ($vo["id"]); ?>)" class="ml-5" style="text-decoration:none">删除</a>
                        </td>

                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>

    </div>


    <!--请在下方写此页面业务相关的脚本-->
    <script type="text/javascript" src="/blog/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>

    <script type="text/javascript">

        /*table*/
        $(function(){
            $('.table-sort').dataTable({
                "aaSorting": [[ 0, "asc" ]],//默认第几个排序
                "bStateSave": true,//状态保存
            });
        });

        /*新增*/
        function add(id){
            var url = "<?php echo U('Photo/photo_add');?>?id="+id;
            layer_show("相册",url,550,360);
        }

        /*删除*/
        function photo_del(obj,id) {
            layer.confirm('确认要删除吗？',function(index){
                $.ajax({
                    url:"<?php echo U('Photo/photo_del_validate');?>",
                    type: 'POST',
                    dataType: 'json',
                    data: {id:id},
                    success: function(res){
                        console.log(res);
                        if (res == 1) { $(obj).parents("tr").remove(); layer.msg('已删除!');}
                        else if (res == 2) {layer.msg('删除失败!');}
                        else if (res == 3) {layer.msg('不存在!');}
                    },
                    error:function(res) {
                        layer.msg('提交失败!');
                    },
                });
            });
        }


    </script>



</body>
</html>