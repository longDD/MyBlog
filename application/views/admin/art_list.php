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
                <li><a href="<?php echo site_url('admin/main'); ?>">我的网站</a> <span class="divider">/</span></li>
                <li class="active">博文管理</li>
            </ul>
            <div class="well" id="m-cont">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>名称</th>
                        <th>时间</th>
                        <th>操作</th>
                    </tr>
                    <?php foreach ($list as $v): ?>
                        <tr>
                            <td><?php echo $v['id']; ?></td>
                            <td><?php echo $v['title']; ?></td>
                            <td><?php echo date('Y-m-d H:i:s', $v['published']); ?></td>
                            <td>
                                <a href='#'>修改</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href='<?php echo site_url('admin/art_del/' . $v['id']); ?>'>删除</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>

                <div class="pagination pull-right">
                    <ul>
                        <?php echo $page; ?>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>