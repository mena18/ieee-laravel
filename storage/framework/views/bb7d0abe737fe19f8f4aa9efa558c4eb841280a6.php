<div class="col-xs-6 col-md-3 col-lg-3 volunteers">
	<span class="imageOfVolunteer bg" style="background-image:url(' <?php echo e(URL::to($volunteer->img)); ?>' )">
	</span>
	<h2><?php echo e($volunteer->name); ?></h2> <!-- to print the name  -->
	<p><?php echo e($volunteer->committee); ?></p>

	<div class="socialOfVol" style="margin-right: 0">
		<div class="facebook">
			<a href="<?php echo e($volunteer->facebook); ?>" target="_blank">
				<i class="fa fa-facebook" aria-hidden="true"></i>
			</a>
		</div>
		<div class="linkedin">
			<a href="<?php echo e($volunteer->linkedin); ?>" target="_blank">
				<i class="fa fa-linkedin-square" aria-hidden="true"></i>
			</a>
		</div>
	</div>
</div>
