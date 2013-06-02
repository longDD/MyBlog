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
<script src="<?php echo base_url('public/js/openFrame.js'); ?>"></script>
</head>
<body>
	<div class="m-left">
		<ul class="nav nav-pills nav-stacked" id="m-list">
			<li class="active"><a
				href="<?php echo site_url('admin/albums_list'); ?>" target="main">相册列表</a></li>
			<li><a href="<?php echo site_url('admin/albums_add'); ?>"
				target="main">添加相册</a></li>
		</ul>

</body>
</html>