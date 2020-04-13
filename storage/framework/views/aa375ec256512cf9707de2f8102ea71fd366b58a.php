<?php $__env->startSection('title'); ?>
<?php echo e(ucfirst($news->title)); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('caption'); ?>
<h2><?php echo e(ucfirst($news->title)); ?></h2>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<?php $images = explode(',',$news->images); 
	if(sizeof($images) == 1){
		$images[1]='none';
	}
?>
	<section class="news-single-content">
		<div class="container">
			<div class="row">
				<div class="section-content">
					<?php if($images[0]!=='none'): ?>
					<section class="news-single-full-image">
						<center><img src="<?php echo e(URL::to($images[0])); ?>" alt="<?php echo e(ucfirst($news->title)); ?>"></center>
					</section>
					<?php endif; ?>
					<?php if(!is_null($news->description_1)): ?>
					<p><?php echo $news->description_1; ?></p>
					<?php endif; ?>
					<?php if($images[1]!=='none'): ?>
					<section class="news-single-full-image">
						<center><img src="<?php echo e(URL::to($images[1])); ?>" alt="<?php echo e(ucfirst($news->title)); ?>"></center>
					</section>
					<br><br><br>
					<?php endif; ?>
					<?php if(!is_null($news->description_2)): ?>
					<p><?php echo $news->description_2; ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.body',['headerClass'=>'news-single-hero','active'=>'news'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>