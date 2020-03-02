<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="alert alert-danger"><?php echo e($error); ?></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<form action="<?php echo e(route('course.update',$course->id)); ?>" id="event-form" method="post" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>


	<div class="form-group">
		<label class="control-label" for="name">Name : </label>
		<input class="form-control" type="text" name="name" id='name' value="<?php echo e($course->name); ?>" placeholder="Name">
	</div>

	<div class="form-group">
		<label class="control-label" for="hours">Hours : </label>
		<input class="form-control" type="text" name="hours" id='hours' value="<?php echo e($course->hours); ?>" placeholder="Hours">
	</div>

	<div class="form-group">
		<label class="control-label" for="type">Type : </label>
		<select id="type" class="form-control" name="type">
			<option <?php if( $course['type'] =='mid_year'): ?> selected <?php endif; ?> value="mid_year">Mid Year Course</option>
			<option <?php if( $course['type'] =='summer'): ?> selected <?php endif; ?> value="summer">Summer Course</option>
		</select>
	</div>

	<div class="form-group">
		<label class="control-label" for="open">Course Status : </label>
		<select id="type" class="form-control" name="open">
			<option <?php if( $course['open'] =='1'): ?> selected <?php endif; ?> value="1">Open</option>
			<option <?php if( $course['open'] =='0'): ?> selected <?php endif; ?> value="0">Done</option>
		</select>
	</div>

	<div class="form-group">
		<label class="control-label" for="description">description : </label>
		<textarea class="form-control textarea" cols="30" rows="20" placeholder="Description You can leave it empty" name="description" id='description'><?php echo $course->description; ?></textarea>
	</div>

	<input type="submit" class="btn btn-success" id="submit" value="Submit">
</form>

<br><br>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>