<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/mogu/Public/common/bootstrap-3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="/mogu/Public/common/Font-Awesome-master/css/font-awesome.min.css">
	<link rel="stylesheet" href="/mogu/Public/admin/css/header.css">
	<script type="text/javascript">
			var controller="<?php echo (CONTROLLER_NAME); ?>";//全局的当前控制器变量
			var ajax_url="<?php echo U('Ajax/ajax_edit');?>";//这一个是ajax提交的修改地址
	</script>
</head>
<body>
	<header class="header">
		<div class="col-lg-2 left">
			<div class="pull-left logo">
				<a href="javascript">
					<img src="/mogu/Public/admin/images/logo.png" alt="">
				</a>
			</div>
			<div class="toggle pull-right">
				<a href="javascript">
					<i class="fa fa-bars"></i>
				</a>
			</div>
		</div>
		<div class="col-lg-4 right pull-right">
			<ul class="list-inline pull-right">
				<li>
					<a href="javasxript::">
						<i class="fa fa-bell-o" aria-hidden="true"></i>
						<span>7</span>
					</a>
				</li>
				<li>
					<a href="javasxript::">
						<i class="fa fa-envelope-open-o" aria-hidden="true"></i>
						<span>4</span>
					</a>
				</li>
				<li>
					<a href="javasxript::">
						<i class="fa fa-calendar" aria-hidden="true"></i>
						<span>3</span>
					</a>
				</li>
				<li>
					<a href="javasxript::">
						<img src="/mogu/Public/admin/images/user.jpg" alt="">
						<span>Nick</span>
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a href="javascript::">
						<i class="fa fa-sign-out" aria-hidden="true"></i>
					</a>
				</li>
			</ul>
		</div>
	</header>
	<div class="main">
		<div class="col-lg-2 left">
			<ul class="list-inline panel-group">
				<li class="search">
					<form>
						<div class="input-group">
							<input type="text" placeholder="Search...">
							<span><i class="fa fa-search" aria-hidden="true"></i></span>
						</div>
					</form>
				</li>
				<li class="nav-item active panel">
					<a href="#Dashboard" data-toggle="collapse">
						<i class="fa fa-home" aria-hidden="true"></i>
						<span class="title">Dashboard</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
						<span class="selected"></span>
					</a>
					<ul class="collapse" id="Dashboard">
						<li class="active">
							<a href="category.php">
								<i class="fa fa-bar-chart" aria-hidden="true"></i>
								<span class="title">Dashboard 1</span>
							</a>
						</li>
						<li>
							<a href="category_add.php">
								<i class="fa fa-bar-chart" aria-hidden="true"></i>
								<span class="title">Dashboard 2</span>
							</a>
						</li>
						<li>
							<a href="category_exit.php">
								<i class="fa fa-bar-chart" aria-hidden="true"></i>
								<span class="title">Dashboard 3</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="heading">
					<h4>Features</h4>
				</li>
				<li class="nav-item panel">
					<a href="#UI" data-toggle="collapse">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
					<ul id="UI" class="collapse">
						<li>
							<a href="news.php">
								<span class="title">Metronic Grid System</span>
							</a>
						</li>
						<li>
							<a href="news_add.php">
								<span class="title">Metronic Grid System</span>
							</a>
						</li>
						<li>
							<a href="category_exit.php">
								<span class="title">Metronic Grid System</span>
							</a>
						</li>
						<li>
							<a href="category_exit.php">
								<span class="title">Metronic Grid System</span>
							</a>
						</li>
						<li>
							<a href="category_exit.php">
								<span class="title">Metronic Grid System</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="javascript::">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript::">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript::">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript::">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript::">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript::">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript::">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="heading">
					<h4>Features</h4>
				</li>
				<li class="nav-item">
					<a href="javascript::">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript::">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript::">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript::">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
			</ul>
		</div>
		<div class="col-lg-10 right">
<div class="col-md-9 ">
    <!-- 面包屑导航 -->
    <ol class="breadcrumb">
        <li>后台管理</li>
        <li>修改管理员信息</li>
    </ol>
    <!-- 内容列表页面 -->
    <div class="right_content_box">
        <div class="row">
            <a href="javascript:history.go(-1)" class="btn btn-default">返回上一页</a>
        </div>

        <div class="row add_form_box">
            <form action="<?php echo U('manager/editor');?>" method="post">
                <div class="form-group">
                    <label >管理员名称</label>
                    <input type="text" name="manager_name" class="form-control" value="<?php echo ($good_info['manager_name']); ?>">
                </div>
                <div class="form-group">
                    <label >管理员密码</label>
                    <input type="text" name="manager_password" class="form-control" value="<?php echo ($good_info['manager_password']); ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" name="manager_id" value="<?php echo ($good_info['manager_id']); ?>" />
                    <input type="submit" class="btn btn-success"  value="修改">
                </div>
            </form>
        </div>
    </div>
</div>