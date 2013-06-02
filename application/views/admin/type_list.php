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
			<li><a href="<?php echo site_url('admin/art_list'); ?>">博文管理</a> <span
				class="divider">/</span></li>
			<li class="active">博文分类</li>
		</ul>
		<div>
			<!-- Button to trigger modal -->
			<a href="#myModal" role="button" class="btn btn-primary"
				data-toggle="modal">添加</a>

			<!-- Modal -->
			<div id="myModal" style="color: #333" class="modal hide fade"
				tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
				aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">×</button>
					<h3 id="myModalLabel">添加分类</h3>
				</div>
				<form class="form-horizontal" style="margin-top: 20px;"
					method="post"
					action="<?php echo site_url('admin/art_type_add'); ?>">
					<div class="control-group">
						<label class="control-label">名称：</label>
						<div class="controls">
							<input type="text" name="title">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">上级分类：</label>
						<div class="controls">
							<select name="pid">
								<option value="0">顶级分类</option>
                                    <?php echo $tree; ?>
                                </select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">注释：</label>
						<div class="controls">
							<textarea name="descript" rows="5"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
						<button class="btn btn-primary" type="submit">添加</button>
					</div>
				</form>
			</div>
			<div class="well" id="m-cont" style="margin-top: 20px;">
				<ul class="unstyled" style="width: 200px; margin: 20px;">
                        <?php echo $list; ?>
                    </ul>
			</div>
		</div>
	</div>
</body>
</html>