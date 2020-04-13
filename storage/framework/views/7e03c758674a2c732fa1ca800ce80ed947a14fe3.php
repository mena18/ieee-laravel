<?php
$description = $news->description_1?$news->description_1 : $news->description_2;
$description = preg_replace("(\<.*?\>)", " ", $description);
?>
<div class="col-xs-6 col-md-3">
	<div class="news-item">
		<div class="item-meta-data">
			<div class="col-md-8">
				<img src="images/latest-news-author-img.jpg" alt="image">
				<span>IEEE</span>
			</div>
			<div class="col-md-4">
				<span><?php echo e(\Carbon\Carbon::createFromTimeString($news->date)->toFormattedDateString()); ?></span>
			</div>
		</div>
		<div class="item-image">
			<a href="<?php echo e(route("news.show",['id'=>$news->id])); ?>">
				<span class="news-image" style="background-image:url(<?php echo e(explode(',',$news->images)[0]); ?>);"></span>
			</a>
		</div>
		<div class="item-info">
			<h3 class="news-title"><a href="<?php echo e(route('news.show',['id'=>$news->id])); ?>"><?php echo e(ucfirst($news->title)); ?></a></h3>
			<p><?php echo e(substr($description, 0, 30)); ?>...</p>
			<a href="<?php echo e(route('news.show',['id'=>$news->id])); ?>">Read More</a>
		</div>

		<!-- <?php if(Auth::check()): ?>
			<hr>
			<div style="padding-bottom:20px;display:flex;justify-content:space-around">
				<a class="deleteCheck"
					 href="<?php echo e(route('news.delete',['id'=>$news->id])); ?>">
					<div class="btn btn-danger"><i class="fa fa-remove"></i> Delete</div>
				</a>
				<a href="<?php echo e(route('news.edit',['id'=>$news->id])); ?>">
					<div class="btn btn-success"><i class="fa fa-edit"></i> Edit</div>
				</a>
			</div>
		<?php endif; ?> -->
		
	</div>
</div>