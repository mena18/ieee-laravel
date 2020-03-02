<?php $__env->startSection('content'); ?>
   

<h1>Attendees
<?php if(!empty($event_name)): ?>
	For <?php echo e($event_name); ?>

<?php endif; ?>
</h1>

<select class="form-control col-xs-12 col-sm-6 " name="event" onchange="location = this.value;">
	<option value="<?php echo e(route('attendee.mega')); ?>">...</option>
	<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<option value="<?php echo e(route('attendee.mega_2', $event->id)); ?>"
			<?php if($id == $event->id): ?>
				selected
			<?php endif; ?>
		 > <?php echo e($event->title); ?> </option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>

<?php if(!empty(count($attendees))): ?>
	<div class="box" style="margin-top: 70px">
			<div class="box-header">
				<h3 class="box-title">Mega Events Attendees</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="mega_attendees" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="col">Email</th>
							<th scope="col">Mobile</th>
							<th scope="col">National ID</th>
							<th scope="col">University</th>
							<th scope="col">Status</th>
							<th scope="col">Member</th>
							<th scope="col">Code</th>
							<?php if(empty($event_name)): ?>
								<th scope="col">event</th>
							<?php endif; ?>
						</tr>
					</thead>
					<tbody>
					<?php $counter=1; ?>
					<?php $__currentLoopData = $attendees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($counter); ?></td><?php $counter++; ?></td>
							<td><?php echo e($attendee->name); ?></td>
							<td><?php echo e($attendee->email); ?></td>
							<td><?php echo e($attendee->mobile); ?></td>
							<td><?php echo e($attendee->national_id); ?></td>
							<td><?php echo e($attendee->university); ?></td>
							<td><?php echo e($attendee->a_status); ?></td>
							<td><?php echo e($attendee->ieee_member); ?></td>
							<td><?php echo e($attendee->code); ?></td>
							<?php if(empty($event_name)): ?>
								<td><?php echo e($attendee->event['title']); ?></td>
							<?php endif; ?>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
					<tfoot>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Name</th>
						<th scope="col">Email</th>
						<th scope="col">Mobile</th>
						<th scope="col">National ID</th>
						<th scope="col">University</th>
						<th scope="col">Status</th>
						<th scope="col">Member</th>
						<th scope="col">Code</th>
						<?php if(empty($event_name)): ?>
							<th scope="col">event</th>
						<?php endif; ?>
					</tr>
					</tfoot>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
<?php else: ?>
<h1>There Are No Attendees</h1>
<?php endif; ?>

<?php if(Auth::user()->admin == 1 || Auth::user()->admin == 3): ?>
	<a href="<?php echo e(route('attendee.download_mega',$id)); ?>" class="btn btn-success">Download</a>
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>