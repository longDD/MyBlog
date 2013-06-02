<!-- You just need to do is make youself good enough. by long 2013.3.30-->
<!DOCTYPE html>
<html>
<head>
<title>mylog Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet"
	href="<?php echo base_url('public/css/my_bootstrap.css'); ?>" />
<link rel="stylesheet"
	href="<?php echo base_url('public/css/admin.css'); ?>" />
<link rel="stylesheet"
	href="<?php echo base_url('public/css/bootstrap-responsive.min.css'); ?>" />
<!-- script-->
<script src="<?php echo base_url('public/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
</head>
<body>
	<div class="m-right m-box">
		<ul class="breadcrumb">
			<li><a href="<?php echo site_url('admin/main'); ?>">我的网站</a> <span
				class="divider">/</span></li>
			<li class="active">相册管理</li>
		</ul>
		<div class="well" id="m-cont">
			<form class="form-horizontal" method="post"
				action="<?php echo site_url('admin/albums_add'); ?>">
				<div class="control-group">
					<label class="control-label">名称：</label>
					<div class="controls">
						<input type="text" name='title'>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">简介：</label>
					<div class="controls">
						<textarea rows="3" name="descript"></textarea>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<button type="submit" class="btn">提交</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>