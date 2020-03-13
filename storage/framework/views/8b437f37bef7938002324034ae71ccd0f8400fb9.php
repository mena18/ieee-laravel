<?php $__env->startSection('content'); ?>

<?php if(Auth::user()->admin == 1 || Auth::user()->admin == 3): ?>
	<?php if( $event->event_open==0 ): ?>
		<h1>Regestration Closed</h1>
		<a href="<?php echo e(route('mega.toggle',$event->id)); ?>">Open Registration</a>
	<?php else: ?>
		<h1>Regestration open</h1>
		<a href="<?php echo e(route('mega.toggle',$event->id)); ?>">Close Registration</a>
	<?php endif; ?>
<?php endif; ?>

<?php $__currentLoopData = $errors->all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="alert alert-danger"><?php echo e($error); ?></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<form action="<?php echo e(route('mega.update',$event->id)); ?> " id="event-form" method="post" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>

	<div class="form-group">
		<label class="control-label">Event Name:</label>
		<input type="text" value="<?php echo e($event->title); ?>" data-check="[^A-Za-z0-9. ]" class="form-control"  id="event-name" placeholder="Event Title" name="name">
	</div>
	<div class="form-group">
		<label class="control-label" for="date">Event Date:</label>
		<input type="date"  class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" value="<?php echo e($event->date?\Carbon\Carbon::createFromTimeString($event->date)->toFormattedDateString():''); ?>">
	</div>
	<div class="form-group">
		<label class="control-label">Event Location:</label>
		<input type="text" value="<?php echo e($event->location); ?>" data-check="[^A-Za-z0-9 ,\\-]" placeholder="Event Location" id="event-loc"  class="form-control" name="location">
	</div>
	
	<div class="form-group">
		<label class="control-label">Mega Days:</label>
		<input class="form-control" data-check="[^A-Za-z0-9.\\- ,]" id="event-mega-date"  placeholder="Mega Event Date" name="mega_date" value="<?php echo e($event->mega_date); ?>"/>
	</div>

	<div class="form-group">
		<label class="control-label">English Description:</label>
		<textarea name="description" id="en-description" class="form-control textarea" cols="30" rows="10" data-check="[^A-Za-z0-9.\\- ,]" placeholder="English Description"><?php echo e($event->description); ?></textarea>
	</div>

	<div class="form-group">
		<label class="control-label">Arabic Description:</label>
		<!--                        TODO::ARABIC RegEx For Validation-->
		<textarea class="form-control textarea" id="ar-description" cols="30" rows="10" data-check="[.]" placeholder="Arabic Description" name="arabic_description"><?php echo e($event->arabic_description); ?></textarea>
	</div>

	<div class="form-group">
		<label class="control-label">Upload Event Image:</label>
		<input name="event_image" type="file" onchange="ValidateSingleInput(this);">
	</div>

	<input type="submit" class="btn btn-success" id="submit" value="update">
</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>