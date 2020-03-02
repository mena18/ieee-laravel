<?php $__env->startSection('title'); ?>
Web Masters
<?php $__env->stopSection(); ?>
<?php $__env->startSection('caption'); ?>
	<h2>WEB MASTERS</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="volunteersSection">
	<div class="container">
		<div class="rowvolunteer">
			<hr class="hrVolunteer">
			<div class="col-xs-offset-3 col-xs-6 col-sm-offset-4 col-md-offset-4 col-md-3 col-lg-offset-4 col-lg-3 volunteers head wow animated bounceInLeft">
				<img class="imageOfVolunteer" src="<?php echo e(URL::to('images/webMasters/amr.jpg')); ?>" alt="Amr head of web development" title="Amr Ahmed">
				<h2>Amr Ahmed</h2>
				<p>Head of Web development committee</p>

				<div class="socialOfVol" style="margin-right: 0">
					<div class="facebook">
						<a href="#" target="_blank">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
					</div>
					<div class="linkedin">
						<a href="https://www.linkedin.com/in/amr-hamdy/" target="_blank">
							<i class="fa fa-linkedin-square" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<hr class="hrVolunteer1">
		</div>


		<div class="rowvolunteer">
			<hr class="hrVolunteer">
			<div class="col-xs-6 col-md-3 col-lg-3 volunteers webMas webMem wow animated fadeInDownBig">
				<img class="imageOfVolunteer" src="<?php echo e(URL::to('images/webMasters/omar.jpg')); ?>" alt="Omar vice head of web development" title="Omar Ehab">
				<h2>Omar Ehab</h2>
				<p>Vice Head of Web development committee</p>

				<div class="socialOfVol" style="margin-right: 0">
					<div class="facebook">
						<a href="https://www.facebook.com/Omar.Ehab007" target="_blank">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
					</div>
					<div class="linkedin">
						<a href="https://www.linkedin.com/in/omar-ehab/" target="_blank">
							<i class="fa fa-linkedin-square" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>

			<div class="col-xs-6 col-md-3 col-lg-3 volunteers webMem wow animated fadeInDownBig">
				<img class="imageOfVolunteer" src="<?php echo e(URL::to('images/webMasters/radwa.jpg')); ?>" alt="radwa volunteer in web development committee" title="Radwa Saad">
				<h2>Radwa Saad</h2>
				<p>Volunteer in Web development committee</p>


				<div class="socialOfVol" style="margin-right: 0">
					<div class="facebook">
						<a href="https://www.facebook.com/radwa.saad.3152" target="_blank">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
					</div>
					<div class="linkedin">
						<a href="https://www.linkedin.com/in/radwa-saad-55370014a/" target="_blank">
							<i class="fa fa-linkedin-square" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>

			<div class="col-xs-6 col-md-3 col-lg-3 volunteers webMem wow animated fadeInDownBig">
				<img class="imageOfVolunteer" src="<?php echo e(URL::to("images/volunteers/c370ea41292e48207a5ecb05f5fe7087f55e8632.jpg")); ?>" alt="Mena volunteer in web development committee" title="Mena Naeem">
				<h2>Mena Naeem</h2>
				<p>Volunteer in Web development committee</p>


				<div class="socialOfVol" style="margin-right: 0">
					<div class="facebook">
						<a href="https://www.facebook.com/profile.php?id=100016656370692" target="_blank">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
					</div>
					<div class="linkedin">
						<a href="https://www.linkedin.com/in/mena-naeem-9bb156155/" target="_blank">
							<i class="fa fa-linkedin-square" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>

			<div class="col-xs-6 col-md-3 col-lg-3 volunteers webMem wow animated fadeInDownBig">
				<img class="imageOfVolunteer" src="<?php echo e(URL::to('images/webMasters/magdy.jpg')); ?>" alt="ahmed  volunteer in web development committee" title="Ahmed Magdy">
				<h2>Ahmed Magdy</h2>
				<p>Volunteer in Web Development Committee</p>


				<div class="socialOfVol" style="margin-right: 0">
					<div class="facebook">
						<a href="https://www.facebook.com/Mad232" target="_blank">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
					</div>
					<div class="linkedin">
						<a href="#" target="_blank">
							<i class="fa fa-linkedin-square" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<hr class="hrVolunteer1">
		</div>
		<div class="clearfix"></div>
		<hr class="hrVolunteer1">
	</div>

	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.body',['headerClass'=>'news-hero','active'=>'webmasters'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>