<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="alert alert-danger"><?php echo e($error); ?></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<form action="<?php echo e(route('event.store')); ?>" id="event-form" method="post" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>

	<div class="form-group">
		<label class="control-label">Event Name:</label>
		<input type="text" value="<?php echo e(old('name')); ?>" data-check="[^A-Za-z0-9. ]" class="form-control"  id="event-name" placeholder="Event Title" name="name">
	</div>
	<div class="form-group">
		<label class="control-label" for="date">Event Date:</label>
		<input type="date" class="form-control" name="date" placeholder="MM/DD/YYYY" value="<?php echo e(old('date')); ?>">
	</div>

	<div class="form-group">
		<label class="control-label">Event Location:</label>
		<input type="text" value="<?php echo e(old('location')); ?>" data-check="[^A-Za-z0-9 ,\\-]" placeholder="Event Location" id="event-loc"  class="form-control" name="location">
	</div>

	<div class="form-group">
		<label class="control-label">Speakers Names: <i id="addSpeaker" class="fa fa-plus btn btn-success"></i></label>
		<div class="speakers">
			<input type="text" data-check="[^A-Za-z ]" class="form-control" id="speaker-name" placeholder="Speaker's Name" name="speakers[]" value="">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label">Speakers Images:</label>
		<div class="speakers">
			<input name="speakers_images[]" type="file" onchange="ValidateSingleInput(this);">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label">Event Mission:</label>
		<textarea class="form-control textarea" data-check="[^A-Za-z0-9.\\- ,]" id="event-mission"  placeholder="Event Mission" name="mission"><?php echo e(old('mission')); ?></textarea>
	</div>
	<div class="form-group">
		<label class="control-label">Event Goals:</label>
		<textarea class="form-control textarea" id="event-goals" data-check="[^A-Za-z0-9.\\- ,]" placeholder="Event Goals" name="goals"><?php echo e(old('goals')); ?></textarea>
	</div>
	<div class="form-group">
		<select class="form-control" name="event_type">
			<option value="">Select Type</option>
			<option value="workshop">Workshops</option>
			<option value="visit">Visits</option>
			<option value="session">Sessions</option>
		</select>
	</div>

	<div class="form-group">
		<label class="control-label">Event Description:</label>
		<textarea name="description" class="form-control textarea" cols="30" rows="10" data-check="[^A-Za-z0-9.\\- ,]"><?php echo e(old('description')); ?></textarea>
	</div>

	<div class="form-group">
		<label class="control-label">Upload Event Image:</label>
		<input name="event_image" type="file" onchange="ValidateSingleInput(this);">
	</div>

	<input type="submit" class="btn btn-success" id="submit" value="Submit">
</form>

<br><br>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index',['script'=>['event_validation']], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>