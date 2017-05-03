<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mogu</title>
	<link rel="stylesheet" href="/mogu/Public/common/bootstrap-3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="/mogu/Public/common/Font-Awesome-master/css/font-awesome.min.css">
</head>
<body>
	<header id="header">
		
	</header>

<link rel="stylesheet" href="/mogu/Public/home/css/user.css">
<script src="/mogu/Public/home/js/user.js"></script>
<body>
<div class="user_page">
    <div class="user_logo" >
        <img src="/mogu/Public/home/images/user_logo.png" alt="">
    </div>
    <div class="user_banner" id="register">
        <!--注册页面-->
        <form onsubmit="return is_value('register');" method="post" action="<?php echo U('user/register');?>">
        <div class="user">
            <div class="rg_title login_padding register">
                <h3>新用户注册</h3>
            </div>
            <div class="user_padding">
                <div class="form_group">
                    <p class="error_tip error_username">请输入用户名</p>
                    <p class="error_tip error_pwd">请输入密码</p>
                    <p class="error_tip error_repwd">请输入确认密码</p>
                </div>
                <div class="form_group">
                    <lable class="lable_sty">用户名：</lable>
                    <div class="input_w"><input type="text" class="input_sty user_name" placeholder="用户名" name="user_name"></div>
                </div>
                <div class="form_group">
                    <lable  class="lable_sty">密码：</lable>
                    <div class="input_w"><input type="password" class="input_sty user_password"  placeholder="密码" name="user_password"></div>
                </div>
                <div class="form_group">
                    <lable  class="lable_sty">确认密码：</lable>
                    <div class="input_w"><input type="password" class="input_sty user_password" placeholder="确认密码" name="confirm_password" id="repwd"></div>
                <div class="form_group">
                    <input type="submit" value="立即注册" class="sub_sty ">
                </div>
                <div class="rg_footer form_group">
                    <input type="checkbox" checked="checked">
                    <span> 我已阅读并且同意《蘑菇街网络服务使用协议》</span>
                </div>
                <div class="rg_login form_group" >
                    <a href="login.html">< 已有账号登录</a>
                </div>
            </div>

        </div>
        </form>
    </div>
</div>
</body>
	<div id="footer">
		
	</div>
	<script src="/mogu/Public/common/bootstrap-3.3.7/js/jquery-1.11.1.min.js"></script>
	<script src="/mogu/Public/common/bootstrap-3.3.7/js/bootstrap.js"></script>
</body>
</html>