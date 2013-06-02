<!-- You just need to do is make youself good enough. by long 2013.4.11-->
<!DOCTYPE html>
<html>
    <head>
        <title>MyBlog Admin</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <frameset rows="15%,*" frameborder="0">
        <frame id="top" name="top" src="<?php echo site_url('admin/top'); ?>" noresize="noresize" scrolling="no"/>
        <frameset cols="211,*">
            <frame id="left" name="left" src="<?php echo site_url('admin/left'); ?>" noresize="noresize" scrolling="no"/>
            <frame id="main" name="main" src="<?php echo site_url('admin/main'); ?>" noresize="noresize"/>
        </frameset>
    </frameset>
</html>