<?php $__env->startSection('title'); ?>
	Our Volunteers
<?php $__env->stopSection(); ?>
<?php $__env->startSection('caption'); ?>
<h2>Volunteers</h2>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section class="volunteersSection">
	<div class="container">
		<div class="rowvolunteer">
			<hr class="hrVolunteer">

			<?php $__currentLoopData = $volunteers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $volunteer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php echo $__env->make('team.volunteermini', ['volunteer'=>$volunteer], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


			<div class="clearfix"></div>
			<hr class="hrVolunteer1">
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.body',['active'=>'volunteers','headerClass'=>'news-hero'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>