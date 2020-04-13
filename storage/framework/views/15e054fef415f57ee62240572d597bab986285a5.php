<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="alert alert-danger"><?php echo e($error); ?></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<form action="<?php echo e(route('magazine.update',$magazine->id)); ?>" id="event-form" method="post" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>


	<div class="form-group">
		<label class="control-label" for="name">Name : </label>
		<input class="form-control" type="text" name="name" id='name' value="<?php echo e($magazine->name); ?>" placeholder="Name">
	</div>

	<div class="form-group">
		<label class="control-label" for="url">URL : </label>
		<input class="form-control" type="text" name="url" id='url' value="<?php echo e($magazine->url); ?>" placeholder="URL">
	</div>

	<div class="form-group">
		<label class="control-label" for="image"> Cover Image : </label>
		<input id="image" type="file" name='image' class="form-control-file">
	</div>

	<input type="submit" class="btn btn-success" value="Submit">
</form>

<br><br>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>