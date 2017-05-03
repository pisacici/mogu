<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/mogu/Public/common/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/mogu/Public/home/css/common.css">
    <script src="/mogu/Public/common/bootstrap-3.3.7/js/jquery-1.11.1.min.js"></script>
    <script src="/mogu/Public/common/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="page_login blur" >
</div>
<form action="<?php echo U('manager/register');?>" method="POST" class="login_form">
    <div class="form-group">

        <label >用&nbsp;户&nbsp;名：</label>
        <input class="form-control" type="text" name="manager_name">
    </div>
    <div class="form-group">

        <label >密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</label>
        <input class="form-control" type="password" name="manager_password">
    </div>

    <div class="form-group">

        <label >重复密码：</label>
        <input class="form-control" type="password" name="repassword">
    </div>
    <div class="form-group">

        <label >验&nbsp;证&nbsp;码：</label>
        <input class="form-control" type="text" name="verify">
    </div>
        <div class="form-group">
        <img src="<?php echo U('manager/verify');?>" onclick="show(this)">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success btn-block btn-lg" value="注册">
    </div>


    <script>
        function show(obj){
            obj.src="<?php echo U('manager/verify');?>?"+Math.random();
        }
    </script>
</form>
</body>
</html>