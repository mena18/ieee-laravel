<?php $__env->startSection('content'); ?>

<?php if(Auth::user()->admin == 1): ?>
	<a class="btn btn-success" href="<?php echo e(route('certificate.create')); ?>">Add new Certificate</a>
<?php endif; ?>

<?php if(!empty(count($certificates))): ?>
	<div class="box" style="margin-top: 20px">
		<div class="box-header">
			<h3 class="box-title">Certificates</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table id="mega_attendees" class="table table-bordered table-striped">
				<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Serial</th>
					<th scope="col">email</th>
					<th scope="col">Link</th>
					<th scope="col">Course</th>
					<th scope="col">Receiving Time</th>
					<?php if(Auth::user()->admin == 1): ?>
						<th scope="col">Edit</th>
						<th scope="col">Delete</th>
					<?php endif; ?>
				</tr>
				</thead>
				<tbody>
				<?php $counter=1; ?>
				<?php $__currentLoopData = $certificates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr id="<?php echo e($cer->id); ?>">
						<td><?php echo e($counter); ?></td><?php $counter++; ?></td>
						<td><?php echo e($cer->name); ?></td>
						<td><?php echo e($cer->serial); ?></td>
						<td><?php echo e($cer->email); ?></td>
						<td><?php echo e($cer->link); ?></td>
						<td><?php echo e($cer->course['name']); ?></td>
						<td><?php echo e($cer->created_at); ?></td>
						<?php if(Auth::user()->admin == 1): ?>
							<td><a class="btn btn-success" href="<?php echo e(route('certificate.edit',$cer->id)); ?>"><i class="fa fa-edit"></i> Edit</a></td>
							<td>
								<?php $var = route("certificate.delete",$cer->id) ?>
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
					<th scope="col">Serial</th>
					<th scope="col">Course</th>
					<th scope="col">Receiving Time</th>
					<?php if(Auth::user()->admin == 1): ?>
						<th scope="col">Edit</th>
						<th scope="col">Delete</th>
					<?php endif; ?>
				</tr>
				</tfoot>
			</table>
		</div>
		<!-- /.box-body -->
	</div>
<?php else: ?>
<h1>There Are No certificates</h1>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>