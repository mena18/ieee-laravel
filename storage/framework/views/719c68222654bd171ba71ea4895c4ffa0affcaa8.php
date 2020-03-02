<?php $__env->startSection('title'); ?>
	All Events
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="events-search-filter" style="background-color:#fff;">
	<div class="container">
		<div class="row">
			<div class="section-content clearfix">
				<div class="col-sm-4 btn-body">
					<a href="#" id="visits" class="btn" data-title="Visits" data-index='0'></a>
				</div>
				<div class="col-sm-4 btn-body">
					<a href="#" id="workshop" class="btn" data-title="Workshops" data-index='1'></a>
				</div>
				<div class="col-sm-4 btn-body">
					<a href="#" id="sessions" class="btn" data-title="Sessions" data-index='2'></a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php if(count($events) > 0): ?>
<section class="events-list">
	<div class="container">
		<div id="events-list" class="row">
			<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php echo $__env->make('events.eventpreview',['event'=>$event], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</section>
<?php else: ?>
	<section class="events-list text-center h1">No Events Added</section>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.body', ['active'=>'events','headerClass'=>'events-hero','script'=>'events'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>