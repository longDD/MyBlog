<!-- You just need to do is make youself good enough. by long 2013.3.30-->
<!DOCTYPE html>
<html>
    <head>
        <title>index</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('public/css/default.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap-responsive.min.css'); ?>"/>
        <!-- script-->
        <script src="<?php echo base_url('public/js/jquery.js'); ?>"></script>
        <script src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
    </head>
    <body data-spy="scroll" data-target=".bs-docs-sidebar">

        <!-- Navbar ================================================== -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="<?php echo site_url('home'); ?>">MyBlog</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active" >
                                <a href="<?php echo site_url('home'); ?>" class="bootstro" data-bootstro-title="首页" data-bootstro-placement="bottom">首页
                                </a>
                            </li>
                            <li class="">
                                <a href="<?php echo site_url('home/art_list'); ?>" class="bootstro" data-bootstro-title="我的博文" data-bootstro-placement="bottom">博文
                                </a>
                            </li>
                            <li class="">
                                <a href="<?php echo site_url('home/pho_list'); ?>" class="bootstro" data-bootstro-title="我的相册" data-bootstro-placement="bottom">相册
                                </a>
                            </li>
                            <li class="">
                                <a href="<?php echo site_url('home/about'); ?>" class="bootstro" data-bootstro-title="关于我" data-bootstro-placement="bottom">关于我
                                </a>
                            </li>
                        </ul>
                        <form class="navbar-form pull-right">
                            <input class="span2" type="text" placeholder="search">
                            <button type="submit" class="btn">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- nav end-->