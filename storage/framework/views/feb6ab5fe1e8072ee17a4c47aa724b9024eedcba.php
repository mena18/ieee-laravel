<?php if(count($gallery) > 0): ?>
	<?php $i=0;?>
<section class="featured-gallery">
	<div class="row home-gallery">
		<?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php $i++;?>
		<div class="col-sm-<?php echo e($i==1?6:3); ?> gallery-item">
			<span class="gallery-img bg flex" data-featherlight="#content-<?php echo e($i); ?>" style="background-image:url('<?php echo e($image->url); ?>')"></span>
			<div id="content-<?php echo e($i); ?>" class="gallery-lightbox">
				<img src="<?php echo e($image->url); ?>" alt="<?php echo e($image->event_id); ?>">
				<div class="gallery-lightbox-content">
					<p><?php echo e($image->description); ?>

						<br>
						<a href="<?php echo e(route('events.event',['id'=>$image->event_id])); ?>">
							<?php echo e($image->event['title']); ?>

						</a>

					</p>
				</div>
			</div>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</section>
<?php endif; ?>