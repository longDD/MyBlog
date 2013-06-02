<!-- You just need to do is make youself good enough. by long 2013.3.30-->
<!DOCTYPE html>
<html>
    <head>
        <title>mylog Admin</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet"  href="<?php echo base_url('public/css/my_bootstrap.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('public/css/admin.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap-responsive.min.css'); ?>" />
    </head>
    <body>
        <div class="m-right m-box">
            <ul class="breadcrumb">
                <li><a href="<?php echo site_url('admin/main'); ?>">我的网站</a> <span class="divider">/</span></li>
                <li class="active">相册管理</li>
            </ul>
            <div class="well" id="m-cont">
                <ul class="thumbnails">
                    <?php foreach ($albums as $v): ?>
                        <li class="span4">
                            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="color: #333;">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3 id="myModalLabel">上传图片</h3>
                                </div>
                                <div class="modal-body">
                                    <h4>上传文件</h4>
                                    <form method="post" action="<?php echo site_url('admin/img_upload') ?>" enctype="multipart/form-data" target="upload_target" id="upload_form">
                                        <span>标题：</span><input name="title" type="text"/><br/>
                                        <input name="userfile" type="file"/>
                                        <input type="hidden" name="albums" value="<?php echo $v['id']; ?>"/>
                                        <iframe id="upload_target" name="upload_target" src="#" style="width:100%;height:80%;display: none;"></iframe>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" id="do_submit">Upload</button>
                                    <button class="btn" data-dismiss="modal">取消</button>
                                </div>
                            </div>
                            <div class="thumbnail">
                                <img src="<?php echo base_url('public/img/logo.png'); ?>" alt="">
                                <div class="caption" style="color: #fff;">
                                    <h3><?php echo $v['title']; ?></h3>
                                    <p><?php echo $v['descript']; ?></p>
                                    <p>
                                        <a href="<?php echo site_url('admin/albums_del/' . $v['id']); ?>" class="btn btn-danger">删除</a>
                                        <a data-toggle="modal" href="#myModal" class="btn btn-success">添加</a>
                                        <a data-toggle="modal" class="btn btn-info" href="<?php echo site_url('admin/photo_list/' . $v['id']); ?>" class="btn">查看</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <!-- script-->
        <script src="<?php echo base_url('public/js/jquery.js'); ?>"></script>
        <script src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
        <script>
            $(function() {
                $('.close').click(function() {
                    $('.modal-footer').show();
                    $("input[name='title']").val(' ');
                    $("input[name='userfile']").val(' ');
                    $('#upload_target').hide();
                });
                $('#do_submit').click(function() {
                    $('#upload_form').submit();
                    $('#upload_target').show();
                    $('.modal-footer').hide();
                });
            });
        </script>
    </body>
</html>