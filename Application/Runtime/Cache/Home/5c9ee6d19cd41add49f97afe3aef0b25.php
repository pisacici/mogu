<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mogu</title>
	<link rel="stylesheet" href="/mogu/Public/common/bootstrap-3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="/mogu/Public/common/Font-Awesome-master/css/font-awesome.min.css">
	<script src="/mogu/Public/common/bootstrap-3.3.7/js/jquery-1.11.1.min.js"></script>
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
    <div class="user_banner">
        <!--<img src="/mogu/Public/home/images/user_banner.png" alt="">-->
        <!--登录页面-->

        <div class="user">
            <div class="rg_title loggin_padding login_a">
                <span class="pull-left user_padding" href="#login" data-toggle="tab">普通登录</span>
                <span class="pull-right user_padding" href="#register" data-toggle="tab">注册</span>
            </div>

           <div class="tab-content">

               <div class="user_padding tab-pane active fade in" id="login">
                   <form onsubmit="return is_value('login')" method="post" action="<?php echo U('User/ajax_login');?>">
                   <div class="form_group">
                       <p class="error_tip error_username">请输入用户名</p>
                       <p class="error_tip error_pwd">请输入密码</p>
                       <p class="error_tip error_code">请输入验证码</p>
                   </div>
                   <div class="form_group">
                       <lable class="lable_sty">用户名：</lable>
                       <div class="input_w"><input type="text" class="input_sty user_name" placeholder="用户名/邮箱/手机号" name="user_name"></div>
                   </div>
                   <div class="form_group">
                       <lable  class="lable_sty ">密码：</lable>
                       <div class="input_w"><input type="password" class="input_sty user_password" placeholder="密码" name="user_password"></div>
                   </div>
                    <div class="auth-box">
                        <div class="form_group">
                            <lable  class="lable_sty ">验证码：</lable>
                            <div class="input_w"> <input type="text" class="input_sty" placeholder="验证码" name="auth_code" id="auth_code"></div>
                        </div>
                        <div class="form_group">
                            <div ><img src="<?php echo U('user/verify');?>" alt="" onclick="$(this).attr('src','<?php echo U('user/verify');?>?'+Math.random())" class="auth_code"></div>
                        </div>
                    </div>
                   <div class="form_group">
                       <input type="submit" value="登录" class=" sub_sty" id="login_submit">
                   </div>

                   <div class="rg_footer form_group">
                       <div class="different_app">
                           <a href="#">
                               <img src="/mogu/Public/home/images/QQ.png" alt="">
                               <span>QQ登录</span>
                           </a>
                           <a href="#">
                               <img src="/mogu/Public/home/images/weixin.png" alt="">
                               <span>QQ登录</span>
                           </a>
                           <a href="#">
                               <img src="/mogu/Public/home/images/microblog.png" alt="">
                               <span>QQ登录</span>
                           </a>
                       </div>
                   </div>
                   <div class="rg_login form_group" >
                       <a href="<?php echo U('admin/User/register');?>" class="tab_on">免费注册</a>
                       <a href="login.html">忘记密码</a>
                   </div>
                   </form>
               </div>

               <div class="user_padding tab-pane" id="register">
                   <form onsubmit="return is_value('register')" action="<?php echo U('user/register');?>" method="post">
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
                       <div class="input_w"><input type="password" class="input_sty user_password" placeholder="密码" name="user_password"></div>
                   </div>
                       <div class="form_group">
                           <lable  class="lable_sty">确认密码：</lable>
                           <div class="input_w"><input type="password" class="input_sty user_password" placeholder="确认密码" name="confirm_password" id="repwd"></div>
                       </div>
                   <div class="form_group">
                       <input type="submit" value="立即注册" class="sub_sty">
                   </div>
                   <div class="rg_footer form_group">
                       <input type="checkbox" checked="checked">
                       <span> 我已阅读并且同意《蘑菇街网络服务使用协议》</span>
                   </div>
                   <div class="rg_login form_group" >
                       <a href="<?php echo U('admin/User/login');?>">< 已有账号登录</a>
                   </div>
                   </form>
               </div>
           </div>
        </div>
    </div>
</div>
</body>
	<div id="footer">
		
	</div>

	<script src="/mogu/Public/common/bootstrap-3.3.7/js/bootstrap.js"></script>
</body>
</html>