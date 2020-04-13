<?php $__env->startSection('content'); ?>

<?php if(Auth::user()->admin == 1): ?>
	<a class="btn btn-success" href="<?php echo e(route('magazine.create')); ?>">ADD New Magazine</a>
<?php endif; ?>

<h1> Magazines </h1>

<?php if(!empty(count($magazines))): ?>

	<div class="box" style="margin-top: 20px">
		<div class="box-header">
			<h3 class="box-title">Magazines</h3>
		</div>
		<div class="box-body">
			<table id="mega_attendees" class="table table-bordered table-striped">
				<thead>
				<tr>
					<th scope="col">#</th>
          <th scope="col">image</th>
          <th scope="col">Name</th>
					<th scope="col">url</th>
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
				<?php $__currentLoopData = $magazines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $magazine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr id="<?php echo e($magazine->id); ?>">
						<td><?php echo e($counter); ?></td><?php $counter++; ?></td>
						<td> <img src="<?php echo e(URL::TO($magazine->image)); ?>" >  </td>
						<td><?php echo e($magazine->name); ?></td>
						<td><?php echo e($magazine->url); ?></td>
						<?php if(Auth::user()->admin == 1 || Auth::user()->admin == 2): ?>
							<td><a class="btn btn-primary" href="<?php echo e(route('magazine.edit',$magazine->id)); ?>"><i class="fa fa-edit"></i> Edit</a></td>
						<?php endif; ?>
						<?php if(Auth::user()->admin == 1): ?>
							<td>
								<?php $var = route("magazine.delete",$magazine->id) ?>
								<button  onclick="del('<?php echo e($var); ?>')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
							</td>
						<?php endif; ?>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
				<tfoot>
          <tr>
  					<th scope="col">#</th>
            <th scope="col">image</th>
            <th scope="col">Name</th>
  					<th scope="col">url</th>
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
<h1>There Are No Magazines</h1>
<?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>