<!-- You just need to do is make youself good enough. by long 2013.3.30-->
<!DOCTYPE html>
<html>
    <head>
        <title>point</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap-responsive.min.css'); ?>"/>
        <!-- script-->
        <script src="<?php echo base_url('public/js/jquery.js'); ?>"></script>
        <script src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
        <script tyep="text/javascript">
            $(function() {
                setTimeout('jump()', 3000);
            });
            function jump() {
<?php echo $url; ?>;
            }
        </script>
    </head>
    <body style="background-color: #333333;">
        <div class="modal show">
            <div class="modal-header">
                <h3>提示信息</h3>
            </div>
            <div class="modal-body">
                <?php echo $msg; ?>
            </div>
            <div class="modal-footer">
                <a href="javascript:<?php echo $url; ?>" class="btn btn-primary">3秒内未法自动跳转，点击这里</a>
            </div>
        </div>
    </body>
</html>
