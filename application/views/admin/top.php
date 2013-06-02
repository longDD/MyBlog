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
        <script src="<?php echo base_url('public/js/openFrame.js'); ?>"></script>
        <script>
            function openFrame(url) {
                parent.frames['main'].location.href = url;
            }
        </script>
    </head>
    <body>
        <div class="row">
            <div class="span12" style="height:60px;"></div>
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <div class="container-fluid m-nav">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="brand" href="#">MyBlog Admin</a>
                        <div class="nav-collapse collapse">
                            <p class="navbar-text pull-right">
                                <a href="<?php echo site_url('home'); ?>" target="_blank" class="navbar-link"><i class="icon-home icon-white"></i>&nbsp;站点首页</a>&nbsp;&nbsp;
                                <a href="<?php echo site_url('admin/loginOut'); ?>" class="navbar-link"><i class="icon-off icon-white"></i>&nbsp;退出</a>
                            </p>
                            <ul class="nav" id="m-menu">
                                <li class="active"><a href="<?php echo site_url('admin/left'); ?>" target="left" onclick="openFrame('<?php echo site_url('admin/main'); ?>')">我的网站</a></li>
                                <li><a href="<?php echo site_url('admin/left/art_left'); ?>" target="left" onclick="openFrame('<?php echo site_url('admin/art_list'); ?>')">我的博文</a></li>
                                <li><a href="<?php echo site_url('admin/left/pho_left'); ?>" target="left" onclick="openFrame('<?php echo site_url('admin/albums_list'); ?>')">我的图片</a></li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>