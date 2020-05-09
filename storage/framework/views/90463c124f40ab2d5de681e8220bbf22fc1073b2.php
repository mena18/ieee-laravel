<?php $__env->startSection('title'); ?>
	IEEE MAGAZINE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('caption'); ?>
	<h2>IEEE MAGAZINE</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <section class="magazines">
    <div class="container">

			<?php if(count($magazines)>0): ?>
				<?php $__currentLoopData = $magazines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $magazine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		      <div class="magazine">
		        <a href="<?php echo e(route('magazine.show',$magazine->id)); ?>">
		          <img src="<?php echo e(URL::to($magazine->image)); ?>">
		          <h2><?php echo e($magazine->name); ?></h2>
		        </a>
		      </div>
			
		      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php else: ?>
				<div>
					<h1>Coming Soon</h1>
				</div>
			<?php endif; ?>
    </div>
  </section >


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.body',['headerClass'=>'events-hero','active'=>'magazine','script'=>'magazine'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>