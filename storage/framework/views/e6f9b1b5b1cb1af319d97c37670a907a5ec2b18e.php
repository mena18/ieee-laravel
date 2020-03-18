<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="alert alert-danger"><?php echo e($error); ?></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<form action="<?php echo e(route('certificate.store')); ?>" id="event-form" method="post" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>


	<div class="form-group">
		<label class="control-label" for="name">Name : </label>
		<input class="form-control" type="text" name="name" id='name' value="<?php echo e(old('name')); ?>" placeholder="Name">
	</div>

	<div class="form-group">
		<label class="control-label" for="course"> Course : </label>
		<select id="course" class="form-control" name="course_id">
			<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($course->id); ?>"><?php echo e($course->name); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>
	</div>

	<div class="form-group">
		<label class="control-label" for="email">Email : </label>
		<input class="form-control" type="text" name="email" id='email' value="<?php echo e(old('email')); ?>" placeholder="Email">
	</div>

	<input type="submit" class="btn btn-success" id="submit" value="Submit">
</form>


<h1> or upload many certificates </h1>
<p>file should contains 2 columns (name:the name of the attendee,course:the name of the course)</p>
<form action="<?php echo e(route('certificate.upload')); ?>"  method="post" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>


	<div class="form-group">
		<label class="control-label" for="file"> File : </label>
		<input id="file" type="file" name='file' class="form-control-file">
	</div>

	<input type="submit" class="btn btn-success" value="Upload">
</form>

<br><br>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>