
<!-- You just need to do is make youself good enough. by long 2013.3.30-->
<!DOCTYPE html>
<html>
    <head>
        <title>mylog Admin</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?php echo base_url('public/css/my_bootstrap.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('public/css/admin.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap-responsive.min.css'); ?>"/>
        <!-- script-->
        <script src="<?php echo base_url('public/js/jquery.js'); ?>"></script>
        <script src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
    </head>
    <body>
        <div class="m-right m-box">
            <ul class="breadcrumb">
                <li><a href="<?php echo site_url('admin/main'); ?>">后台</a> <span class="divider">/</span></li>
                <li><a href="<?php echo site_url('admin/main'); ?>">我的网站</a> <span class="divider">/</span></li>
                <li class="active">网站状态</li>
            </ul>
            <h4>系统信息</h4>
            <p>php版本:<?php echo $php; ?></p>
            <p>Apache版本：<?php echo $apache; ?></p>
            <p>mysql版本：<?php echo $mysql; ?></p>
            <p>可用空间：<?php echo $freeSpace; ?></p>
            <p>上传文件大小：<?php echo $upload; ?></p>
            <p>文章数量：<?php echo $blogs; ?></p>
            <p>照片数量：<?php echo $photos; ?></p>
            <p>评论数量：<?php echo $comments; ?></p>
        </div>
    </body>
</html>