<?php $__env->startSection('title'); ?>
	Offline Courses
<?php $__env->stopSection(); ?>
<?php $__env->startSection('caption'); ?>
	<h2>OFFLINE COURSES</h2>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<section class="details">
		<div class="container">
			<div class="row">
				<div id="faq-links" class="flex">
					<div id="summer" class="faq-selected btn btn-primary btn-lg">Summer Courses</div>
					<div id="midyear" class="btn btn-warning">Midyear Courses</div>
				</div>


				<div id="faq-wrapper" class="about-summer">

					<div class="faq-group">
						<div class="slide-left">
							<div class="courseSelected">Summer Courses</div>
						</div>
						<hr>
					</div><!--faq-group-->
					<div class="slide-left">
						<div  class="faq">
							<ul class="faq-accordion">
								<?php if(count($summer)>0): ?>
									<?php $__currentLoopData = $summer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li>
											<a href="#"><?php echo e($course->name); ?> 
												<span>
													<?php echo e($course->open?"Open":"Done"); ?>

												</span>
											</a>
											<ul class="faq-content">
												<li>
													<div>
														<?php echo $course->description; ?>

													</div>
												</li>
											</ul>
										</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php else: ?>
									<h1>COMMING SOON</li>
								<?php endif; ?>

							</ul>
						</div>
					</div>
				</div>
				<div class="about-midyear faq-hide">

					<div class="faq-group">
						<div class="slide-left">
							<div class="courseSelected">MidYear Courses</div>
						</div>
						<hr>
					</div>

					<div class="slide-left">
						<ul class="faq-accordion">
							<?php if(count($mid_year)>0): ?>
								<?php $__currentLoopData = $mid_year; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li>
										<a href="#"><?php echo e($course->name); ?> 
											<span>
												<?php echo e($course->open?"Open":"Done"); ?>

											</span>
										</a>
										<ul class="faq-content">
											<li>
												<div>
													<?php echo $course->description; ?>

												</div>
											</li>
										</ul>
									</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							<?php else: ?>
								<li>COMMING SOON</li>
							<?php endif; ?>

						</ul>

					</div><!--lide-left -->
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.body',['headerClass'=>'events-hero','active'=>'offline','script'=>'offlineCourses'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>