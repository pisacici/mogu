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
		<li>红人穿搭列表</li>
	</ol>
	<a href="<?php echo U('redman/add');?>" class="btn btn-success">添加信息</a>
	<table class="table table-hover">
		<tr class="table-title">
			<th>商品ID</th>
			<th>商品名称</th>
			<th>父级ID</th>
			<th>商品图片</th>
			<th>作者名称</th>
			<th>作者头像</th>
			<th>创建时间</th>
			<th>操作</th>
		</tr>
		<?php if($redman_list != ''): if(is_array($redman_list)): $i = 0; $__LIST__ = $redman_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><tr class="table-body" data-id="<?php echo ($value['redman_id']); ?>">
					<td><?php echo ($value['redman_id']); ?></td>
					<td data-toggle="ajax_edit" data-colmun="redman_name"><?php echo ($value['redman_name']); ?></td>
					<td data-toggle="ajax_edit" data-colmun="parent_id"><?php echo ($value['parent_id']); ?></td>
					<td data-toggle="ajax_edit" data-colmun="redman_path"><?php echo ($value['redman_path']); ?></td>
					<td data-toggle="ajax_edit" data-colmun="redman_author"><?php echo ($value['redman_author']); ?></td>
					<td data-toggle="ajax_edit" data-colmun="redman_thumb"><?php echo ($value['redman_thumb']); ?></td>
					<td><?php echo ($value['create_time']); ?></td>
					<td>
						<a href="<?php echo U('redman/edit',array('id'=>$value['redman_id']));?>">修改</a> | 
						<a href="<?php echo U('redman/delete',array('id'=>$value['redman_id']));?>">删除</a>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
	</table>
	<div class="pagination"><?php echo ($page); ?></div>
	<div class="alert alert-success hide" id="msg_box"></div>
		</div>
	</div>
	<script src="/mogu/Public/common/bootstrap-3.3.7/js/jquery-1.11.1.min.js"></script>
	<script src="/mogu/Public/common/bootstrap-3.3.7/js/bootstrap.min.js"></script>
	<script src="/mogu/Public/admin/js/header.js"></script>
</body>
</html>
<!-- <script>
	$(function(){
		$('[data-toggle="ajax_edit"]').dblclick(function() {
			var has_edit=$(this).attr('has_edit');
			if(has_edit!=1){
				$(this).attr('has_edit',1);
				var old_html=$(this).html();
				$(this).html('{input value="'+old_html+'"}');
				$(this).find('input').focus();
			}
		});
		$(document).on("blur","input",function(){
			var key=$(this).parent().parent().attr('data-id');
			var value=$(this).parent().find('input').val();
			var colmun=$(this).parent().attr("data-colmun");
			$.post("lib/redman_ajax.php",{ key,value,colmun },function(data){
				// var r_obj=JSON.parse(data);
				// $('#msg_box').html(r_obj.msg);
			});
			redata($(this).parent());
		});
		$(document).keydown(function(ev) {
			if(ev.keyCode==13){
				$('[data-toggle="ajax_edit"][has_edit="1"]').each(function(){
					var key=$(this).parent().attr('data-id');
					var value=$(this).find('input').val();
					var colmun=$(this).attr("data-colmun");
					$.post("lib/redman_ajax.php", { key,value,colmun }, function(data) {
						// var r_obj=JSON.parse(data);
						// $('#msg_box').html(r_obj.msg);
					});
					redata($(this));
				})
			}
		});
		function redata(p_input){
			var new_html=p_input.find('input').val();
			p_input.html(new_html);
			p_input.attr("has_edit","");
		};
	});
</script> -->