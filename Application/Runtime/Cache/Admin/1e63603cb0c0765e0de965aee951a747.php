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
        <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <title>Lz_CMS-后台管理中心</title>
    <link rel="stylesheet" href="/tp_blog/Public/Admin/layui/css/layui.css">
    <link rel="stylesheet" href="/tp_blog/Public/Admin/css/global.css">
    <script type="text/javascript" src="/tp_blog/Public/Admin/layui/layui.js"></script>
    <script src="/tp_blog/Public/Admin/layui/lay/dest/layui.all.js"></script>  
</head>
<body>
<div class="layui-tab-brief main-tab-container">
    <ul class="layui-tab-title main-tab-title">
      <a href="/tp_blog/index.php/Admin/Cate/index"><li>栏目列表</li></a>
      <a href="/tp_blog/index.php/Admin/Cate/cate_add"><li class="layui-this">添加栏目</li></a>
      <div class="main-tab-item">栏目管理</div>
    </ul>
    <div class="layui-tab-content">
      <div class="layui-tab-item layui-show">
        <form class="layui-form" id="form_add">
          <div class="layui-tab layui-tab-card">
            <ul class="layui-tab-title">
              <li class="layui-this">基本选项</li>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <!-- lay-verify="required" -->
                    <div class="layui-form-item">
                        <label class="layui-form-label">栏目名称</label>
                        <div class="layui-input-inline input-custom-width">
                            <input type="text" name="catename" value=""  autocomplete="off" placeholder="请输入栏目名称" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">栏目描述</label>
                        <div class="layui-input-inline input-custom-width">
                            <textarea name="catedesc" lay-verify="" autocomplete="off" placeholder="请输入栏目描述" class="layui-textarea"></textarea>
                        </div>
                    </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">排序</label>
                    <div class="layui-input-inline input-custom-width">
                        <input type="text" name="sort" value="20" lay-verify="number" autocomplete="off" placeholder="数字越小越靠前" class="layui-input">
                    </div>
                </div>

              </div>

                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn" lay-submit="" lay-filter="cate_add">立即提交</button>
                    </div>
                </div>
            </div>
        </div>
          
        </form>
      </div>
    </div>
</div>
<script type="text/javascript">
    layui.use('form',function(){
        var $ = layui.jquery;
        var form = layui.form();
        form.render();
            form.on('submit(cate_add)', function(data){
            $.post("<?php echo U('Cate/cate_add_validate');?>",data.field,function(res){
                // console.log(data.field.result);
                if(res.result == 1){
                    console.log(data.field);
                    layer.msg('1111',{time: 1000});
                    // var url = "<?php echo U('Cate/cate_add');?>"; //
                    // setTimeout(window.location.href=url,2000);
                    }
                    else if(res.result == 2){layer.msg('222', {time: 1000});}
                    else if(res.result == res){layer.msg(res, {time: 1000});}
            },'json');
            return false;
        });


    });

    
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