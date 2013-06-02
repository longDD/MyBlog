<!-- longdd 2013.4.30 首页主体-->
<!-- Main ================================================== -->
<div class="container-fluid">
    <div class="row-fluid span11" style="min-height: 600px;">
        <div class="span8 main1">

            <?php foreach ($list as $v): ?>
                <div class="span11 conts pull-right">
                    <h4 class="conts-title">
                        <a href="<?php echo site_url('home/art_show/' . $v['id']); ?>">
                            <?php echo $v['title']; ?>
                        </a>
                    </h4>
                    <div class="conts-cont span11">
                        <?php echo cutChar(strip_tags($v['content']), 0, 500); ?>
                    </div>
                    <div class="conts-menu">
                        <a href="#" class="m-btn"><i class="icon-eye-open icon-white"></i>阅读（<?php echo $v['visits']; ?>）</a>
                        <a href="#" class="m-btn"><i class="icon-comment icon-white"></i>评论（<?php echo $v['comments']; ?>）</a>
                        <a href="#" class="m-btn"><i class="icon-th-list icon-white"></i>分类</a>
                        <a href="#" class="m-btn"><i class="icon-tag icon-white"></i>标签</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php include APPPATH . '/views/home/left.php'; ?>
    </div>
</div>
<!--main end-->