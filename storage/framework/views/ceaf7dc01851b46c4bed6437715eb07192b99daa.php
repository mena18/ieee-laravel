<?php $__env->startSection('content'); ?>
<?php if(Auth::user()->admin == 1 || Auth::user()->admin == 3): ?>
	<?php if( $event->event_open==0 ): ?>
		<h1>Regestration Closed</h1>
		<a class="btn btn-primary" href="<?php echo e(route('event.toggle',$event->id)); ?>">Open Registration</a>
	<?php else: ?>
		<h1>Regestration open</h1>
		<a class="btn btn-danger" href="<?php echo e(route('event.toggle',$event->id)); ?>">Close Registration</a>
	<?php endif; ?>
<?php endif; ?>


<form action="<?php echo e(route('event.update',$event->id)); ?>" id="event-form" method="post" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>

	<div class="form-group">
		<label class="control-label">Event Name:</label>
		<input type="text" value="<?php echo e($event->title ? $event->title : old('name')); ?>" data-check="[^A-Za-z0-9. ]" class="form-control"  id="event-name" placeholder="Event Title" name="name">
	</div>
	<div class="form-group">
		<label class="control-label">Event Date:</label>
		<input type="date" class="form-control" name="date" placeholder="MM/DD/YYYY" value="<?php echo e($event->date?\Carbon\Carbon::createFromFormat('Y-m-d',$event->date)->format('Y-m-d'):''); ?>">
	</div>
	<div class="form-group">
		<label class="control-label">Event Location:</label>
		<input type="text" value="<?php echo e($event->location); ?>" data-check="[^A-Za-z0-9 ,\\-]" placeholder="Event Location" id="event-loc"  class="form-control" name="location">
	</div>
	
	<?php $speakers = explode(',',$event->speakers);?>

	<!-- old id for <i> was  addSpeaker new one is addSpeaker_2-->
	<div class="form-group">
		<label class="control-label">Speakers Names: <i id="addSpeaker" class="fa fa-plus btn btn-success"></i></label>
	<div class="speakers">
	<?php $__currentLoopData = $speakers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $speaker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<input type="text" data-check="[^A-Za-z ]" class="form-control" id="speaker-name" placeholder="Speaker's Name" name="speakers[]" value="<?php echo e($speaker); ?>">
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	</div>

	<div class="form-group">
		<label class="control-label">Speakers Images:</label>
		<div class="speakers">
	<?php $__currentLoopData = $speakers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $speaker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<input name="speakers_images[]" type="file" onchange="ValidateSingleInput(this);">
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	</div>

	<div class="form-group">
		<label class="control-label">Event Mission:</label>
		<textarea class="form-control textarea" data-check="[^A-Za-z0-9.\\- ,]" id="event-mission"  placeholder="Event Mission" name="mission"><?php echo e($event->mission); ?></textarea>
	</div>
	<div class="form-group">
		<label class="control-label">Event Goals:</label>
		<textarea class="form-control textarea" id="event-goals" data-check="[^A-Za-z0-9.\\- ,]" placeholder="Event Goals" name="goals"><?php echo e($event->goals); ?></textarea>
	</div>
	<div class="form-group">
		<label class="control-label" for="event_type" >Event Type</label>
		<select class="form-control" name="event_type" id='event_type'>
			<option <?php echo e($event->event_type==''?'selected':null); ?> value="">Select Type</option>
			<option <?php echo e($event->event_type=='workshop'?'selected':null); ?>  value="workshop">Workshops</option>
			<option <?php echo e($event->event_type=='visit'?'selected':null); ?>  value="visit">Visits</option>
			<option <?php echo e($event->event_type=='session'?'selected':null); ?>  value="session">Sessions</option>
		</select>
	</div>
	<div class="form-group">
		<label class="control-label">Event Description:</label>
		<textarea name="description" class="form-control textarea" cols="30" rows="10" data-check="[^A-Za-z0-9.\\- ,]"><?php echo e($event->description); ?></textarea>
	</div>
	<div class="form-group">
		<label class="control-label">Upload Event Image:</label>
		<input name="event_image" type="file" onchange="ValidateSingleInput(this);">
	</div>
	<input type="submit" class="btn btn-primary" id="submit" value="Edit">
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index',['script'=>['event_validation']], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>