<!-- longdd 2013.4.30 右侧菜单-->
<div class="span3 main2">
	<div class="part">
		<div class="part-title">分类</div>
		<div class="part-cont">
			<ul class="nav nav-pills nav-stacked">
                <?php foreach ($types as $v): ?>
                    <li><a
					href='<?php echo site_url('home/art_list/' . $v['id']); ?>'><?php echo $v['title'] ?>(<?php echo $v['total']; ?>)</a></li>
                <?php endforeach; ?>
            </ul>
		</div>
	</div>
	<div class="part">
		<script src="<?php echo base_url('public/js/tags.js'); ?>"></script>
		<div class="part-title">热门标签</div>
		<div class="part-cont" id='tags'>
        <?php foreach ($tags as $v): ?>
                 <a
				href='<?php echo site_url('home/art_list_tag/' . $v['id']); ?>'
				class="<?php echo $tags_color[array_rand($tags_color,1)]; ?>">
				<?php echo $v['title']?>
				</a>
                <?php endforeach; ?>
        </div>
	</div>
</div>