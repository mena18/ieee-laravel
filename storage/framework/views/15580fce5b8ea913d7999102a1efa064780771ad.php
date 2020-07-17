<?php $__env->startSection('title'); ?>
	All Mega Events
<?php $__env->stopSection(); ?>

<?php $__env->startSection('caption'); ?>
	<h2>IEEE Mega Events</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(count($events) > 0): ?>
<section class="events-list">
	<div class="container">
		<div id="events-list" class="row">
			<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php echo $__env->make('mega.eventpreview',['event'=>$event], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</section>
<?php else: ?>
	<section class="events-list text-center h1">No Events Added</section>
<?php endif; ?>
<script src="<?php echo e(URL::to('js/btn.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.body', ['active'=>'events','headerClass'=>'events-hero','script'=>'events'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>