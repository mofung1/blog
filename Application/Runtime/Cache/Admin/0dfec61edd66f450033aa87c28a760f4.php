<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录</title>
<link rel="stylesheet" href="/blog/Public/Admin/css/login/lrtk.css">

</head>
<body>

<div id="login">
    <div class="wrapper">
        <div class="login">
            <form id="form_login" class="container offset1 loginform">
                <div id="owl-login">
                    <div class="hand"></div>
                    <div class="hand hand-r"></div>
                    <div class="arms">
                        <div class="arm"></div>
                        <div class="arm arm-r"></div>
                    </div>
                </div>
                <div class="pad">
                    <!-- <input type="hidden" name="_csrf" value="9IAtUxV2CatyxHiK2LxzOsT6wtBE6h8BpzOmk="> -->
                    <div class="control-group">
                        <div class="controls">
                            <!-- <label for="email" class="control-label "></label> -->
                            <input id="username" type="" name="admin_name" placeholder="用户名" tabindex="1" autofocus="autofocus" class="form-control input-medium">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <!-- <label for="password" class="control-label "></label> -->
                            <input id="password" type="password" name="password" placeholder="密码" tabindex="2" class="form-control input-medium">
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary " id="btn">登录</button>
                </div>
            </form>
        </div>
    </div>
    <script src="/blog/Public/Admin/js/jquery.min.js"></script>
    <script>
    $(function() {

        $('#login #password').focus(function() {
            $('#owl-login').addClass('password');
        }).blur(function() {
            $('#owl-login').removeClass('password');
        });
    });


    $("#btn").click(function(){

        var form = decodeURIComponent($("#form_login").serialize(),true);

        $.ajax({
            url:"<?php echo U('Login/login_validate');?>",
            data:form,
            type:"POST",
            success:function(res) {
                // console.log(res);
                if (res == 1) {window.location.href = "<?php echo U('Index/index');?>";}
                    else if (res == 2) {alert("用户名或密码错误！");}
                    else if (res == 3) {alert("用户不存在！");}
                    else if (res == 4) {alert("无访问权限！");}

                    else if (res == 11) {alert("用户名为空！");}
                    else if (res == 12) {alert("密码为空！");}
            },
            error:function(res){

            }
        });
    });

    </script>
</div>

</div>
</body>
</html>