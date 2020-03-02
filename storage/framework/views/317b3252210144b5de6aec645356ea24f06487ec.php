<?php $__env->startSection('content'); ?>
   

<h1>Attendees
<?php if(!empty($event_name)): ?>
	For <?php echo e($event_name); ?>

<?php endif; ?>
</h1>

<select class="form-control col-xs-12 col-sm-6 " name="event" onchange="location = this.value;">
	<option value="<?php echo e(route('attendee.event')); ?>">...</option>
	<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<option value="<?php echo e(route('attendee.event_2',$event->id)); ?>"
			<?php if($id == $event->id): ?>
				selected
			<?php endif; ?>
		 > <?php echo e($event->title); ?> </option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>

<?php if(!empty(count($attendees))): ?>
	<div class="box" style="margin-top: 70px">
		<div class="box-header">
			<h3 class="box-title">Event Attendees</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table id="mega_attendees" class="table table-bordered table-striped">
				<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">faculty</th>
					<th scope="col">email</th>
					<th scope="col">semester</th>
					<th scope="col">facebook</th>
					<th scope="col">mobile</th>
					<th scope="col">membership</th>
					<?php if(empty($event_name)): ?>
						<th scope="col">event</th>
					<?php endif; ?>
					<th scope="col">Regestration Time</th>
				</tr>
				</thead>
				<tbody>
					<?php $counter=1; ?>
					<?php $__currentLoopData = $attendees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($counter); ?></td><?php $counter++; ?></td>
							<td><?php echo e($attendee->name); ?></td>
							<td><?php echo e($attendee->faculty); ?></td>
							<td><?php echo e($attendee->email); ?></td>
							<td><?php echo e($attendee->semester); ?></td>
							<td><a href="<?php echo e($attendee->facebook_profile); ?>" target="_blank"><?php echo e($attendee->facebook_profile); ?></a></td>
							<td><?php echo e($attendee->mobile); ?></td>
							<td><?php echo e($attendee->membership_type); ?></td>
							<?php if(empty($event_name)): ?>
								<td><?php echo e($attendee->event['title']); ?></td>
							<?php endif; ?>
							<td><?php echo e($attendee->created_at); ?></td>

						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
				<tfoot>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">faculty</th>
					<th scope="col">email</th>
					<th scope="col">semester</th>
					<th scope="col">facebook</th>
					<th scope="col">mobile</th>
					<th scope="col">membership</th>
					<?php if(empty($event_name)): ?>
						<th scope="col">event</th>
					<?php endif; ?>
					<th scope="col">Regestration Time</th>
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
	<a href="<?php echo e(route('attendee.download_event',$id)); ?>" class="btn btn-success">Download</a>
<?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>