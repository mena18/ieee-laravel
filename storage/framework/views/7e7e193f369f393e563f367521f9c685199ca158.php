<?php $__env->startSection('title'); ?>
<?php echo e(ucfirst($event->title)); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('caption'); ?>
	<span class=\"tag\"><?php echo e(ucfirst($event->event_type)); ?></span><h2><?php echo e(ucfirst($event->title)); ?></h2>
	<p><?php echo e($event->location); ?> | <span><?php echo e(date('M d, Y', strtotime($event->date))); ?></span></p>
<?php $__env->stopSection(); ?>
<?php
$speakersNames = explode(',', $event->speakers);
$speakersImages = explode(',', $event->speakers_images);
$speakers = [];
$i = 0;
foreach($speakersNames as $speaker) {
	$speakers[] = [
		'name'  => $speaker,
		'image' => $speakersImages[$i]
	];
	$i++;
}
?>
<?php $__env->startSection('content'); ?>
<section class="events-single-content">
	<div class="container">
		<div class="row">
			<div class="events-single-about col-md-4">
				<h3><?php echo e($event->title); ?></h3>

				<h4>Mission:</h4><br>
				<div class="event-des">
					<p>
						<?php echo $event->mission; ?>

					</p>
				</div>
				<h4>Goals:</h4><br>
				<div class="event-des">
					<p>
						<?php echo $event->goals; ?>

					</p>
				</div>
				<h4>More About this Event:</h4><br>
				<p><?php echo $event->description; ?></p>
				<?php if($event->event_open): ?>
					<a href="<?php echo e(route('event.register',['id'=>$event->id])); ?>"><div class="btn btn-info">Register Attendance</div></a>
				<?php endif; ?>
			</div>
			<div class="events-single-speakers col-md-4">
				<h3>SPEAKERS</h3>
				<?php if(count($speakers) > 0): ?>
					<?php $__currentLoopData = $speakers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $speaker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="speaker-item">
						<div class="col-sm-3">
							<img src="<?php echo e(URL::to($speaker['image'])); ?>" alt="image">
							<div style="background-image:url('<?php echo $speaker['image'];?>')"></div>
						</div>
						<div class="col-sm-9">
							<h4><?php echo e($speaker['name']); ?></h4>
							<!--<p>Graphic Designer</p>-->
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php else: ?>
				<div class="speaker-item">
					<div class="alert alert-info">
						No Speakers Added.
					</div>
				</div>
				<?php endif; ?>
			</div>
			<div class="events-single-location col-md-4">
				<h3>LOCATION</h3>
				<p><?php echo e($event->location); ?></p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6824.982541309847!2d29.963499116865766!3d31.207116081474375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6aa3847bf78e707d!2z2KzYp9mF2LnYqSDZgdin2LHZiNizINio2KfZhNil2LPZg9mG2K_YsdmK2Kk!5e0!3m2!1sar!2seg!4v1506517535097" width="800" height="300" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>


<div class="alert-box hidden">
	<div class="alert alert-danger h1">
		Are you Sure You Want to Delete this Event?
	</div>
	<div class="btns" style="display:flex;justify-content: space-around;align-items: center;">
		<div data-val="1" class="btn btn-danger btn-lg confirmDelete">Yes</div>
		<div data-val="0" class="btn btn-info btn-lg cancelDelete" style="margin-left:20px;">No</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.body',[
'headerClass'=>'events-single-hero',
'active'=>'events'
], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>