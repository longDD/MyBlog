
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
                <li class="active">图片列表</li>
            </ul>
            <div class="well" id="m-cont">
                <div class="row-fluid">
                    <ul class="thumbnails">
                        <?php foreach ($list as $v): ?>
                            <li class="span3">
                                <div class="thumbnail">
                                    <img src="<?php echo $v['url']; ?>" alt="">
                                    <h4><?php echo $v['title']; ?></h4>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
