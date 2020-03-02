<?php $__env->startSection('content'); ?>

<?php if(Auth::user()->admin == 1): ?>
	<a class="btn btn-success" href="<?php echo e(route('course.create')); ?>">Create New Course</a>
<?php endif; ?>

<h1> Courses </h1>

<?php if(!empty(count($courses))): ?>

	<div class="box" style="margin-top: 20px">
		<div class="box-header">
			<h3 class="box-title">Courses</h3>
		</div>
		<div class="box-body">
			<table id="mega_attendees" class="table table-bordered table-striped">
				<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">hours</th>
					<th scope="col">Attendees</th>
					<th scope="col">Status</th>
					<th scope="col">type</th>
					<th scope="col">Description</th>
					<?php if(Auth::user()->admin == 1 || Auth::user()->admin == 2): ?>
						<th scope="col"></th>
					<?php endif; ?>
					<?php if(Auth::user()->admin == 1): ?>
						<th scope="col"></th>
					<?php endif; ?>
				</tr>
				</thead>
				<tbody>
				<?php $counter=1; ?>
				<?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr id="<?php echo e($course->id); ?>">
						<td><?php echo e($counter); ?></td><?php $counter++; ?></td>
						<td><?php echo e($course->name); ?></td>
						<td><?php echo e($course->hours); ?></td>
						<td><?php echo e(count($course->certificates)); ?></td>
						<td class="<?php echo e($course->open=='1'?'green':'red'); ?>"><?php echo e($course->open=='1'?"Open":"Done"); ?></td>
						<td><?php echo e($course->type); ?></td>
						<td><?php echo e(preg_replace("(\<.*?\>)", " ", substr($course->description, 0, 60))); ?>...</td>
						<?php if(Auth::user()->admin == 1 || Auth::user()->admin == 2): ?>
							<td><a class="btn btn-primary" href="<?php echo e(route('course.edit',$course->id)); ?>"><i class="fa fa-edit"></i> Edit</a></td>
						<?php endif; ?>
						<?php if(Auth::user()->admin == 1): ?>
							<td>
								<?php $var = route("course.delete",$course->id) ?>
								<button  onclick="del('<?php echo e($var); ?>')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
				<tfoot>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">hours</th>
					<th scope="col">Attendees</th>
					<th scope="col">Status</th>
					<th scope="col">type</th>
					<th scope="col">Description</th>
					<?php if(Auth::user()->admin == 1 || Auth::user()->admin == 2): ?>
						<th scope="col"></th>
					<?php endif; ?>
					<?php if(Auth::user()->admin == 1): ?>
						<th scope="col"></th>
					<?php endif; ?>
				</tr>
				</tfoot>
			</table>
		</div>
	</div>
<?php else: ?>
<h1>There Are No Courses</h1>
<?php endif; ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>