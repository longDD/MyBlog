<!-- longdd 2013.4.30 文章显示页-->
<div class="container-fluid">
	<div class="row-fluid span11">
		<div class="span8 main1">
			<div class="span11 conts pull-right">
				<h4 class="conts-title"><?php echo $info[0]['title']; ?></h4>
				<div class="conts-menu">
					<a href="#" class="m-btn"><i class="icon-eye-open"></i>阅读（<?php echo $info[0]['visits']; ?>）</a>
					<a href="#" class="m-btn"><i class="icon-comment"></i>评论（<?php echo $info[0]['comments']; ?>）</a>
					<a href="#" class="m-btn"><i class="icon-th-list"></i>分类</a> <a
						href="#" class="m-btn"><i class="icon-tag"></i>标签</a>
				</div>
				<div class="dis-cont span11">
                    <?php echo $info[0]['content']; ?>
                </div>
				<div class="dis-cont span11 prev-next" style="height: 70px;">
					<ul class="pager" style="margin: 0px;">
						<li class="previous"><a
							href="<?php if($pre[0]['id'] === FALSE){ echo '#';}else{echo site_url('home/art_show/'.$pre[0]['id']);} ?>">&larr;上一篇:<?php echo $pre[0]['title'];?></a></li>
						<li class="next"><a
							href="<?php if($next[0]['id'] === FALSE){ echo '#';}else{echo site_url('home/art_show/'.$next[0]['id']);} ?>"><?php echo $next[0]['title'];?>:下一篇&rarr;</a></li>
					</ul>
				</div>
				<div class="dis-cont span11 dis-link">关联文章</div>
				<div class="dis-cont span11 read-comment">
					<script type="text/javascript">
                        $(function() {
                            $('#comment_form').submit(function(){
                                $.post(
                                        "<?php echo site_url('home/add_comment'); ?>",
                                        {
                                            author:$('#comment_author').val(),
                                            content:$('#comment_cont').val(),
                                            pid:$('#comment_pid').val(),
                                            },
                                        function(msg){
                                            	var obj = jQuery.parseJSON(msg);
                                            	//if(obj.status == 1){
                                                //html添加评论
                                                //}
                                            	alert(obj.info);
                                    });
                                return false;
                                });
                            //查看所有评论
                           $('#all_comment').click(function(){
                               $.post("<?php echo site_url('home/all_comment')?>",{pid:$('#comment_pid').val()},function(msg){
                                   var msg = jQuery.parseJSON(msg);
                                   $('#all_comment').hide("slow");
                                   for(var v in msg.data){
                                       $('<div/>',{class:'well',html:'<p>'+msg.data[v].content+'</p><p>--by&nbsp;&nbsp;'+msg.data[v].author+'</p><p>--'+msg.data[v].time+'</p>'}).appendTo('.read-comment');
                                       }
                                   });
                               });
                        });
                    </script>
					<div class="page-header">
						<h1>评论</h1>
					</div>
				<?php foreach ($coms as $v):?>
					<div class="well">
						<p><?php echo $v['content']; ?></p>
						<p>--by&nbsp;&nbsp;<?php echo $v['author']; ?></p>
						<p>--<?php echo date('Y-m-d H:i:s',$v['time']); ?></p>
					</div>
					<?php endforeach; ?>
					<?php if($info[0]['comments']>=5):?>
					<button class="btn btn-large btn-primary pull-right"
						id="all_comment" type="button">查看更多</button>
						<?php endif;?>
				</div>
				<div class="dis-cont span11 write-comment">
					<div class="page-header">
						<h1>发表评论</h1>
					</div>
					<form method="post" action="" class="form-horizontal"
						id="comment_form">
						<div class="control-group">
							<label class="control-label"
								style="width: 50px; margin-right: 15px;">姓名:</label>
							<div>
								<input type="hidden" name="pid"
									value="<?php echo $info[0]['id']; ?>" id="comment_pid" /> <input
									type="text" name="author" id="comment_author" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"
								style="width: 50px; margin-right: 15px;">内容:</label>
							<div>
								<textarea name="content" id="comment_cont" style="width: 400px;"
									rows="4"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"
								style="width: 50px; margin-right: 15px;"></label>
							<div>
								<button type="submit" class="btn">提交</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
        <?php include APPPATH . '/views/home/left.php'; ?>
    </div>
</div>
<!--main end-->
