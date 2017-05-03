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
					<a href="javasxript:;">
						<i class="fa fa-bell-o" aria-hidden="true"></i>
						<span>7</span>
					</a>
				</li>
				<li>
					<a href="javasxript:;">
						<i class="fa fa-envelope-open-o" aria-hidden="true"></i>
						<span>4</span>
					</a>
				</li>
				<li>
					<a href="javasxript:;">
						<i class="fa fa-calendar" aria-hidden="true"></i>
						<span>3</span>
					</a>
				</li>
				<li>
					<a href="javasxript:;">
						<img src="/mogu/Public/admin/images/user.jpg" alt="">
						<span><?php echo (session('uname')); ?></span>
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a href="javascript:;">
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
				<li>
					<a href="#manager" data-toggle="collapse" >管理员管理</a>
					<ul id="manager" class="collapse <?php if(CONTROLLER_NAME == Goods): ?>in<?php endif; ?>">
						<li> <a  href="<?php echo U('manager/index');?>">管理员列表</a></li>
						<li><a href="<?php echo U('manager/add');?>">添加管理员</a></li>
					</ul>
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
					<a href="javascript:;">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript:;">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript:;">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript:;">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript:;">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript:;">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript:;">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="heading">
					<h4>Features</h4>
				</li>
				<li class="nav-item">
					<a href="javascript:;">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript:;">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript:;">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
				<li class="nav-item">
					<a href="javascript:;">
						<i class="fa fa-diamond" aria-hidden="true"></i>
						<span class="title">UI Features</span>
						<span class="arrow pull-right"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
					</a>
				</li>
			</ul>
		</div>
		<div class="col-lg-10 right">
<div class="col-md-9">
    <ol class="breadcrumb">
        <li>后台管理</li>
        <li>管理员列表</li>
    </ol>
    <div class="row">
        <a href="<?php echo U('manager/add');?>" class="btn btn-success">添加管理员信息</a>
    </div>
    <table class="table">
        <tr>
            <th>管理员ID</th>
            <th>管理员名称</th>
            <th>管理员密码</th>
            <th>操作</th>
        </tr>

        <?php if(is_array($manager)): $i = 0; $__LIST__ = $manager;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($value['manager_id']); ?></td>
            <td><?php echo ($value['manager_name']); ?></td>
            <td><?php echo ($value['manager_password']); ?></td>
            <td>
                <a href="<?php echo U('manager/editor',array('id'=>$value['manager_id']));?>">修改</a>
                <a href="<?php echo U('manager/delete',array('id'=>$value['manager_id']));?>">删除</a>
            </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>

</div>
<include file="footer.html"></include>