<?php if (!defined('THINK_PATH')) exit();?>
<div class="layui-tab layui-tab-brief main-tab-container">
    <ul class="layui-tab-title main-tab-title">
      <div class="main-tab-item">后台管理系统1.0</div>
    </ul>
    <div class="layui-tab-content">
        <blockquote class="layui-elem-quote">
            <p>当前时间：<span id="mytime">加载中</span>
            </p>
        </blockquote>
        <blockquote class="layui-elem-quote">
            <p>系统版本：MFCMS v1.0
            </p><hr>
            <p>客户端IP：<?php echo ($ip); ?>
            </p><hr>
            <p>服务端IP：<?php echo ($server_ip); ?>
            </p><hr>
            <p>PHP版本：<?php echo ($php_version); ?>
            </p><hr>
            <p>服务器操作系统：<?php echo ($php_os); ?>
            </p><hr>
            <p>是否支持mysql：<?php echo ($is_mysql); ?>
            </p><hr>
            <p>服务端信息：<?php echo ($server); ?>
            </p>
        </blockquote>
    </div>
</div>


<script>


function showTime(){
    nowtime=new Date();
    year=nowtime.getFullYear();
    month=nowtime.getMonth()+1;
    date=nowtime.getDate();
    document.getElementById("mytime").innerText=year+"年"+month+"月"+date+" "+nowtime.toLocaleTimeString();
}

setInterval("showTime()",1000);

</script>