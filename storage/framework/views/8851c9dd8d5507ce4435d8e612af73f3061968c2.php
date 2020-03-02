<?php $__env->startSection('title'); ?>
	Courses
<?php $__env->stopSection(); ?>
<?php $__env->startSection('caption'); ?>
	<h2>Courses &amp; Certification</h2>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<section class="details">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-4 fir wow animated jackInTheBox">
					<div class="certificate">
						<div class="color1">
							<h2>Check Certificate</h2>
							<form action="<?php echo e(route('courses.certificate')); ?>" method="get">
								<input type="text" name="serial" id="serial" placeholder="Enter Certificate Serial">
								<input type="submit" value="CHECK">
							</form>
							<div class="warning hide">
								<p>Please Enter Correct Serial</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-4 sec wow animated bounceInRight">
					<div class="offline">
						<a href="<?php echo e(route('courses.offline')); ?>">
							<div class="color2">
								<h2>Offline Courses</h2>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-4 thir wow animate bounceInRight">
					<div class="online">
						<a href="<?php echo e(route('courses.online')); ?>">
							<div class="color3">
								<h2>Online Courses</h2>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.body',['headerClass'=>'events-hero','active'=>'courses','script'=>'courses'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>