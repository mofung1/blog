<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <title>后台管理中心</title>
    <link rel="stylesheet" href="/tp_blog/Public/Admin/layui/css/layui.css">
    <link rel="stylesheet" href="/tp_blog/Public/Admin/css/global.css">
    <script type="text/javascript" src="/tp_blog/Public/Admin/layui/layui.js"></script>
</head>
<body>
<div class="layui-layout layui-layout-admin">
    

    <!-- 导航 -->
    <div class="layui-header header">
    <div class="layui-main">
        <a class="logo" href="http://www.phplaozhang.com" target="_blank">
          <!-- <img src="/tp_blog/Public/Admin/images/logo-top.png" alt="mofung1"> -->
        </a>
        <!-- layui-this -->
<!--         <ul class="layui-nav top-nav-container">
            <li class="layui-nav-item menu_select">
            <a href="<?php echo U('Index/index');?>" >首页</a>
            </li>
            <li class="layui-nav-item menu_select">
            <a href="<?php echo U('Cate/index');?>">内容</a>
            </li>
            <li class="layui-nav-item menu_select" >
            <a href="javascript:void(0)">会员</a>
            </li>
            <li class="layui-nav-item menu_select" >
            <a href="javascript:void(0)">设置</a>
            </li>
        </ul> -->
        <div class="top_admin_user">
          <a href="" target="_blank">网站首页</a> |<a class="update_cache" href="javascript:void(0)">更新缓存</a> | <a class="logout_btn" href="javascript:void(0)">退出</a>
        </div>
     </div>
</div>


<script>
    
</script>
    
    <!-- 侧边栏 -->
    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">

            <ul class="layui-nav layui-nav-tree left_menu_ul content_put_manage ">
                <li class="layui-nav-item layui-nav-title" >
                    <a href="/tp_blog/index.php/Admin/Index/index">内容发布管理</a>
                </li>

                <li class="layui-nav-item first-item menu_select layui-this">
                    <a href="/tp_blog/index.php/Admin/Index/index" >
                        <i class="layui-icon">&#xe638;</i>
                        <cite>首页面板</cite>
                    </a>
                </li>

                <li class="layui-nav-item first-item menu_select ">
                    <a href="/tp_blog/index.php/Admin/Cate/index" >
                       <i class="layui-icon">&#xe609;</i>
                       <cite>栏目管理</cite>
                    </a>
                </li>
                
                <li class="layui-nav-item first-item menu_select ">
                    <a href="/tp_blog/index.php/Admin/Cate/index" >
                       <i class="layui-icon">&#xe622;</i>
                       <cite>文章管理</cite>
                    </a>
                </li>

                <li class="layui-nav-item content_manage">
                    <a href="/tp_blog/index.php/Admin/content_manage_search" >
                    <i class="layui-icon">&#xe60a;</i>
                    <cite>日记管理</cite>
                    </a>
                </li>

                <li class="layui-nav-item first-item menu_select ">
                    <a href="/tp_blog/index.php/Admin/Cate/index" >
                       <i class="layui-icon">&#xe611;</i>
                       <cite>留言管理</cite>
                    </a>
                </li>

                <li class="layui-nav-item">
                    <a href="/tp_blog/index.php/Admin/feedback_list">
                    <i class="layui-icon">&#xe60b;</i>
                    <cite>关于</cite>
                    </a>
                </li>              
            </ul>

    			<div class="content_manage_container left_menu_ul hide">
    				<div class="content_manage_title">内容管理</div>
        		<div id="content_manage_tree"></div>
        	</div>
        </div>

    </div>

    <div class="layui-body ">
        <!-- <iframe class="admin-iframe" id="admin-iframe" name="main" src="./category_list.html"></iframe> -->
        <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <title>Lz_CMS-后台管理中心</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <link rel="stylesheet" href="./css/global.css">
    <script type="text/javascript" src="./layui/layui.js"></script>
</head>
<body>
<div class="layui-tab layui-tab-brief main-tab-container">
        <ul class="layui-tab-title main-tab-title">
          <a href="/tp_blog/index.php/Admin/Cate/index"><li class="layui-this">栏目列表</li></a>
          <a href="/tp_blog/index.php/Admin/Cate/cate_add"><li>添加栏目</li></a>
          <div class="main-tab-item">栏目管理</div>
        </ul>
    <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
        <form class="layui-form">

            <table class="list-table">
                <thead>
                    <tr style="text-align: center">
                      <th style="width:40px">排序</th>
                      <th>ID</th>
                      <th>栏目名称</th>
                      <th>添加时间</th>
                      <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr style="text-align: center">
                            <td><input name="sorts[1]" type="text" value="<?php echo ($vo["sort"]); ?>" lay-verify="number" class="layui-input"></td>
                            <td><?php echo ($vo["id"]); ?></td>
                            <td><?php echo ($vo["catename"]); ?></td>
                            <td><?php echo (date("Y-m-d H:i:s",$vo["add_time"])); ?></td>
                            <td style="text-align: center;">
                                <a href="./category_add.html" class="layui-btn layui-btn-small" title="编辑"><i class="layui-icon"></i></a>
                                <a class="layui-btn layui-btn-small layui-btn-danger del_btn" category-id="1" title="删除" category-name="学无止境"><i class="layui-icon"></i></a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                </tbody>
                <thead>
                    <tr>
                      <th colspan="5"><button class="layui-btn layui-btn-small" lay-submit="" lay-filter="sort">排序</button></th>
                    </tr>
                </thead>
            </table>
<!--             <?php echo (dump($list )); ?> -->
      </form>
      </div>
    </div>
</div>

<script type="text/javascript">
layui.use(['element', 'layer', 'form'], function(){
  var element = layui.element()
  ,jq = layui.jquery
  ,form = layui.form()
  ,laypage = layui.laypage;

  //图片预览
  jq('.list-table td .thumb').hover(function(){
    jq(this).append('<img class="thumb-show" src="'+jq(this).attr('thumb')+'" >');
  },function(){
    jq(this).find('img').remove();
  });
  //链接预览
  jq('.list-table td .link').hover(function(){
    var link = jq(this).attr('href');
    layer.tips( link, this, {
    tips: [2, '#009688'],
    time: false
  });
  },function(){
    layer.closeAll('tips');
  });

  //监听提交
  form.on('submit(sort)', function(data){
    loading = layer.load(2, {
      shade: [0.2,'#000'] //0.2透明度的白色背景
    });
    var param = data.field;
    jq.post('',param,function(data){
      if(data.code == 200){
        layer.close(loading);
        layer.msg(data.msg, {icon: 1, time: 1000}, function(){
          location.reload();//do something
        });
      }else{
        layer.close(loading);
        layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
      }
    });
    return false;
  });

  //ajax删除
  jq('.del_btn').click(function(){
    var name = jq(this).attr('category-name');
    var id = jq(this).attr('category-id');
    layer.confirm('确定删除【'+name+'】?', function(index){
      loading = layer.load(2, {
        shade: [0.2,'#000'] //0.2透明度的白色背景
      });
      jq.post('',{'id':id},function(data){
        if(data.code == 200){
          layer.close(loading);
          layer.msg(data.msg, {icon: 1, time: 1000}, function(){
            location.reload();//do something
          });
        }else{
          layer.close(loading);
          layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
        }
      });
    });
    
  });
  
})
</script>
</body>
</html>
    </div>
    
    <!-- 底部 -->
    <div class="layui-footer footer">
    <div class="layui-main">
        <p>2018 © <a href="http://www.phplaozhang.com">mofung1</a></p>
    </div>
</div>
</div>


<script type="text/javascript">
    
layui.use(['layer', 'element','jquery','tree'], function(){
  var layer = layui.layer
  ,element = layui.element() //导航的hover效果、二级菜单等功能，需要依赖element模块
  ,jq = layui.jquery

  jq(jq('.menu_select')[1]).addClass('layui-this').siblings().removeClass('layui-this');

  //头部菜单切换
    // jq('.top-nav-container .layui-nav-item').click(function(){   

    //     var menu_index = jq(this).index('.top-nav-container .layui-nav-item');
    //     jq('.top-nav-container .layui-nav-item').removeClass('layui-this');
    //     jq(this).addClass('layui-this');  
    //     jq('.left_menu_ul').addClass('hide');
    //     jq('.left_menu_ul:eq('+menu_index+')').removeClass('hide');
    //     jq('.left_menu_ul .layui-nav-item').removeClass('layui-this');
    //     jq('.left_menu_ul:eq('+menu_index+')').find('.first-item').addClass('layui-this');
    //     var url = jq('.left_menu_ul:eq('+menu_index+')').find('.first-item a').attr('href');
    //     jq('.admin-iframe').attr('src',url);
    //     //出现遮罩层
    //     jq("#iframe-mask").show();
    //     //遮罩层消失
    //     jq("#admin-iframe").load(function(){   
    //       jq("#iframe-mask").fadeOut(100);
    //     });
    
    function select_menu(idx){
        jq(this).addClass('layui-this'); 
        jq('.top-nav-container .layui-nav-item').removeClass('layui-this');        
    }



  // });
  //左边菜单点击
  jq('.left_menu_ul .layui-nav-item').click(function(){
    jq('.left_menu_ul .layui-nav-item').removeClass('layui-this');
    jq(this).addClass('layui-this');
    //出现遮罩层
    jq("#iframe-mask").show();
    //遮罩层消失
    jq("#admin-iframe").load(function(){   
      jq("#iframe-mask").fadeOut(100);
    });
  });
   
  //点击回到内容页面
  jq('.content_manage_title').click(function(){
  	jq('.left_menu_ul .layui-nav-item').removeClass('layui-this');
  	jq(this).parent().addClass('hide');
  	jq('.content_put_manage').find('.first-item').addClass('layui-this');
  	var url = jq('.content_put_manage').find('.first-item a').attr('href');
    jq('.admin-iframe').attr('src',url);
  	jq('.content_put_manage').removeClass('hide');

  });
  //内容管理树
  jq('.content_manage').click(function(){
    loading = layer.load(2, {
      shade: [0.2,'#000'] //0.2透明度的白色背景
    });
      jq('#content_manage_tree').empty();
      layui.tree({
        elem: '#content_manage_tree' //传入元素选择器
        ,skin: 'white'
        ,target: 'main'
        ,nodes: [{"id":1,"name":"学无止境","children":[{"id":8,"name":"杂谈","children":[],"href":"/admin/article/index/category_id/8.html"},{"id":9,"name":"PHP","children":[],"href":"/admin/article/index/category_id/9.html"},{"id":10,"name":"建站","children":[],"href":"/admin/article/index/category_id/10.html"},{"id":11,"name":"WEB前端","children":[],"href":"/admin/article/index/category_id/11.html"}],"spread":true},{"id":2,"name":"分享无价","children":[{"id":13,"name":"源码分享","children":[],"href":"/admin/download/index/category_id/13.html"},{"id":14,"name":"jQuery特效","children":[],"href":"/admin/download/index/category_id/14.html"}],"spread":true},{"id":3,"name":"日记","children":[],"spread":true,"href":"/admin/link/index/category_id/3.html"},{"id":4,"name":"关于","children":[{"id":5,"name":"关于老张","children":[],"href":"/admin/page/edit/category_id/5.html"},{"id":6,"name":"关于LzCMS","children":[],"href":"/admin/page/edit/category_id/6.html"}],"spread":true,"href":"\/admin\/link\/index\/category_id\/3.html"}]
      });
      jq('.left_menu_ul').addClass('hide');
      jq('.content_manage_container').removeClass('hide');
      layer.close(loading);
  });

  //更新缓存
  jq('.update_cache').click(function(){
    loading = layer.load(2, {
      shade: [0.2,'#000'] //0.2透明度的白色背景
    });
    jq.getJSON('',function(data){
      if(data.code == 200){
        layer.close(loading);
        layer.msg(data.msg, {icon: 1, time: 1000}, function(){
          location.reload();//do something
        });
      }else{
        layer.close(loading);
        layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
      }
    });
  });

  //退出登陆
  jq('.logout_btn').click(function(){
    loading = layer.load(2, {
      shade: [0.2,'#000'] //0.2透明度的白色背景
    });
    jq.getJSON('',function(data){
      if(data.code == 200){
        layer.close(loading);
        layer.msg(data.msg, {icon: 1, time: 1000}, function(){
          location.reload();//do something
        });
      }else{
        layer.close(loading);
        layer.msg(data.msg, {icon: 2, anim: 6, time: 1000});
      }
    });
  });

	
});


</script> 
</body>
</html>