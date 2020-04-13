<?php $__env->startSection('title'); ?>
<?php echo e(ucfirst($event->title)); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('caption'); ?>
	<span class="tag">MEGA</span><h2><?php echo e($event->title); ?></h2><p><?php echo e($event->location); ?> | <span><?php echo e(date('M d, Y', strtotime($event->date))); ?></span></p>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
	<section class="events-single-content">
		<div class="container">
			<div class="row">
				<div class="col-md-<?php echo e($event->event_open?'6' : '12'); ?>">
					<h3>EVENT</h3>
					<p><?php echo $event->description; ?></p>
					<p class="arabic"><?php echo $event->arabic_description; ?></p>
				</div>
				<?php if($event->event_open): ?>
					<div class="events-single-Registeration col-md-4 col-md-offset-2">
						<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="alert alert-danger"> <?php echo e($error); ?> </div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<h3>Please Fill Form Below</h3>
						<form method="POST" action="<?php echo e(route('mega.register',['id'=>$event->id])); ?>" id="megaReg">
							<style>
								.error {
									border-color: red;
								}
							</style>
							<div class="form-group">
								<label for="">Name</label>
								<input name="name" type="text" data-check="[a-zA-Z][a-zA-Z ]{4,}"
											 class="form-control name" placeholder="Enter Your Name"
											 autocomplete="off" value="<?php echo e(old('name')); ?>">
							</div>
							<div class="form-group">
								<label for="">Email address</label>
								<input name="email" value="<?php echo e(old('email')); ?>" type="email" class="form-control email"
											 id="exampleInputEmail3" placeholder="Email" autocomplete="off">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email
									with anyone else.
								</small>
							</div>
							<div class="form-group">
								<label for="">Mobile Number</label>
								<input name="mobile" value="<?php echo e(old('mobile')); ?>" type="text"
											 class="form-control mobile" placeholder="01xxxxxxxxx" autocomplete="off">
								<small id="emailHelp" class="form-text text-muted">We'll never share your mobile
									with anyone else.
								</small>
							</div>
							<?php echo e(csrf_field()); ?>

							<div class="form-group">
								<label for="" >Birthday Date</label>
								<div>
									<input name="date" value="<?php echo e(old('date')); ?>" type='date' class="form-control" placeholder="DD/MM/YYYY" required/>
								</div>
							</div>
							<div class="form-group">
								<label for="">14 Digit National ID </label>
								<input name="nationalid" value="<?php echo e(old('nationalid')); ?>" type="text" data-check="[0-9]{14}"
											 class="form-control nationalid" placeholder="Enter your national ID"
											 autocomplete="off">
							</div>
							<div class="form-group">
								<label for="">University / School</label>
								<input name="university" value="<?php echo e(old('university')); ?>" type="text" pattern="[a-zA-Z][a-zA-Z ]{3,}"
											 class="form-control university" placeholder="University / School"
											 autocomplete="off">
							</div>
							<select name="a_status" class="form-control sel a_status" style="margin-bottom: 15px">
								<option disabled="disabled" selected="selected" value="0">Acadimic Status
								</option>
								<option value="Undergraduate">Undergraduate</option>
								<option value="Graduate">Graduate</option>
							</select>
							<select name="ieeemember" id="membershipS" class="form-control sel2 ieeemember"  style="margin-bottom: 15px">
								<option disabled="disabled" selected="selected" value="0">IEEE Membership
								</option>
								<option value="Member">Membership</option>
								<option value="Non-Member">Non-Membership</option>
							</select>
							<div class="form-group hide membershipid">
								<label for="">Membership ID</label>
								<input name="membership" type="text" data-check="[0-9]"
											 class="form-control membership" placeholder="Membership ID"
											 autocomplete="off">
							</div>
							<button type="submit" class="btn btn-primary submit" id="megaFormSubmit">Submit</button>
						</form>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<section class="contact-form" style="background-color:#fff;">
		<div class="container">
			<div id="mapmap" class="google-maps clearfix" style="padding:  0;">
				<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1706.2069409499832!2d29.909723558331613!3d31.209260909612375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c38a0562fe85%3A0xa34cc632ec23e7!2sBibliotheca+Alexandrina!5e0!3m2!1sen!2seg!4v1519791639941"
						width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.body',[
'headerClass'=>'events-single-hero',
'active'=>'mega',
], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>