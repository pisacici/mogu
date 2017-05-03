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
	<ol class="breadcrumb">
		<li>管理红人穿搭</li>
		<li>修改商品</li>
	</ol>
	<a href="<?php echo U('redman/index');?>" class="btn btn-default">返回列表</a>
	<form action="<?php echo U('redman/edit');?>" method="post" enctype="multipart/form-data">
		<p>商品名称</p>
		<input type="text" name="redman_name" value="<?php echo ($redman_info['redman_name']); ?>"><br>
		<p>父级分类</p>
		<select name="parent_id">
			<option value="0">没有父级</option>
			<?php if(is_array($first_menu_list)): $i = 0; $__LIST__ = $first_menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><option <?php if($value['redman_id'] == $redman_info['parent_id']): ?>selected<?php endif; ?> value="<?php echo ($value['redman_id']); ?>"><?php echo ($value['redman_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		<p>商品图片</p>
		<input type="file" class="dropify" name="redman_path"><br>
		<p>作者名称</p>
		<input type="text" name="redman_author" value="<?php echo ($redman_info['redman_author']); ?>"><br>
		<p>作者头像</p>
		<input type="file" class="dropify" name="redman_thumb"><br>
		<input type="hidden" name="redman_id" value="<?php echo ($redman_info['redman_id']); ?>">
		<a href="<?php echo U('redman/index');?>"><input type="submit" class="btn" value="修改"></a>
	</form>
		</div>
	</div>
	<script src="/mogu/Public/common/bootstrap-3.3.7/js/jquery-1.11.1.min.js"></script>
	<script src="/mogu/Public/common/bootstrap-3.3.7/js/bootstrap.min.js"></script>
	<script src="/mogu/Public/admin/js/header.js"></script>
</body>
</html>
	<link rel="stylesheet" href="/mogu/Public/common/dropify/dropify.min.css">
	<script src="/mogu/Public/common/dropify/dropify.min.js"></script>
	<script>
		$('.dropify').dropify();
	</script>