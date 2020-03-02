<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="alert alert-danger"><?php echo e($error); ?></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<form action="<?php echo e(route('gallery.store')); ?>" id="event-form" method="post" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>


	<div class="form-group">
		<label class="control-label">Gallery Description:</label>
		<textarea name="description" class="form-control textarea" cols="30" rows="10" data-check="[^A-Za-z0-9.\\- ,]"><?php echo e(old('description')); ?></textarea>
	</div>

	<div class="form-group">
		<label class="control-label">Upload Gallery Image:</label>
		<input name="url" type="file" onchange="ValidateSingleInput(this);">
	</div>

	<div class="form-group">
		<select class="form-control" name="event_id">
			<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($event->id); ?>"><?php echo e($event->title); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>
	</div>


	<input type="submit" class="btn btn-success" id="submit" value="Submit">
</form>

<br><br>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>