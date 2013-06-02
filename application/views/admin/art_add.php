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
	<div class="m-main">
		<div class="m-right">
			<ul class="breadcrumb">
				<li><a href="<?php echo site_url('admin/main'); ?>">我的网站</a> <span
					class="divider">/</span></li>
				<li><a href="<?php echo site_url('admin/art_list'); ?>">博文管理</a> <span
					class="divider">/</span></li>
				<li class="active">添加博文</li>
			</ul>
			<div class="well" id="m-cont">
				<script charset="utf-8"
					src="<?php echo base_url('public/kindeditor/kindeditor-min.js'); ?>"></script>
				<script charset="utf-8"
					src="<?php echo base_url('public/kindeditor/lang/zh_CN.js'); ?>"></script>
				<script>
                        var editor;
                        KindEditor.ready(function(K) {
                            editor = K.create('textarea[name="content"]', {
                                allowFileManager: true
                            });
                        });
                    </script>

				<div>
					<form method="post"
						action="<?php echo site_url('admin/art_add'); ?>">
						<div class="control-group">
							<label class="control-label">标题：</label>
							<div class="controls">
								<input type="text" name="title" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">分类：</label>
							<div class="controls">
								<select name="type">
                                        <?php echo $tree; ?>
                                    </select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">内容：</label>
							<div class="controls">
								<textarea name="content" rows="8" style="height: 300px"
									class="span10">请在这里输入内容</textarea>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">标签（用','隔开）：</label>
							<div class="controls">
								<input type="text" name='tags' />
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<button type="submit" class="btn btn-success">提交</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>