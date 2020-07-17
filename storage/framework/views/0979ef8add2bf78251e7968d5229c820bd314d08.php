<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="alert alert-danger"><?php echo e($error); ?></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<form action="<?php echo e(route('certificate.update',$certificate->id)); ?>" id="event-form" method="post" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>


	<div class="form-group">
		<label class="control-label" for="name">Name : </label>
		<input class="form-control" type="text" name="name" id='name' value="<?php echo e($certificate->name); ?>" placeholder="Name">
	</div>

	<div class="form-group">
		<label class="control-label" for="serial">Serial : </label>
		<input class="form-control" type="text" name="serial" id='serial' value="<?php echo e($certificate->serial); ?>" placeholder="Serial">
	</div>

	<div class="form-group">
		<label class="control-label" for="email">Email : </label>
		<input class="form-control" type="text" name="email" id='email' value="<?php echo e($certificate->email); ?>" placeholder="Email">
	</div>

	<div class="form-group">
		<label class="control-label" for="course"> Course : </label>
		<select id="course" class="form-control" name="course_id">

			<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($course->id); ?>"<?php if($certificate->course_id==$course->id): ?> Selected <?php endif; ?> >
				<?php echo e($course->name); ?>

				</option>

			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>
	</div>


	<input type="submit" class="btn btn-success" id="submit" value="Submit">
</form>

<br><br>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>