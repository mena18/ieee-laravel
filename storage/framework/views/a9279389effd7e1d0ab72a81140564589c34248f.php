<?php if(isset($returnTop)): ?>
<button onclick="topFunction()" id="topBtn" class="go-to-top" title="Go to top">
	<i class="fa fa-chevron-up" aria-hidden="true"></i>
</button>
<script src="<?php echo e(URL::to('js/topBtn.js')); ?>"></script>
<?php endif; ?>
<div class="loading">
	<div class="boxLoading"></div>
</div>
<footer id="colophon" class="site-footer">
	<div class="footer-info">
		<div class="container">
			<div class="row">
				<div class="footer-logo col-md-3">
					<a href="<?php echo e(route('home')); ?>" title="IEEE PUASB" rel="home">
						<img src="<?php echo e(URL::to('images/ieee-logo.png')); ?>" alt="IEEEPUAsb_logo" title="IEEE PUA SB">
					</a>
				</div>
				<div class="footer-menu col-md-9">
					<div class="footer-links">
						<ul>
							<li style="color: white">About</li>
							<li><a href="<?php echo e(route('about.contact')); ?>">Contact Us</a></li>
							<li><a href="<?php echo e(route('about.committees')); ?>">Committees</a></li>
							<li><a href="<?php echo e(route('about.benefits')); ?>">IEEE Beneftis</a></li>
						</ul>
					</div>
					<div class="footer-links">
						<ul>
							<li style="color: white">Our Activities</li>
							<li><a href="<?php echo e(route('schedule')); ?>">Schedule</a></li>
							<li><a href="<?php echo e(route('gallery')); ?>">Gallery </a></li>
							<li><a href="<?php echo e(route('mega.all')); ?>">Mega Events</a></li>
							<li><a href="<?php echo e(route('events.all')); ?>">Events</a></li>
						</ul>
					</div>
					<div class="footer-links">
						<ul>
							<li style="color: white">Blog</li>
							<li><a href="<?php echo e(route('news.all')); ?>">Latest News</a></li>
						</ul>
					</div>
					<div class="footer-links">
						<ul>
							<li style="color: white">Our Team</li>
							<li><a href="<?php echo e(route('team.board')); ?>">Board</a></li>
							<li><a href="<?php echo e(route('team.volunteers')); ?>">Volunteers</a></li>
							<li><a href="<?php echo e(route('team.webmasters')); ?>">Web Masters</a></li>
						</ul>
					</div>
					<div class="footer-links">
						<ul class="social">
							<li class="facebook">
								<a href="https://www.facebook.com/IEEEPUA" target="_blank">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							</li>
							<li class="insta">
								<a href="https://www.instagram.com/ieeepua/" target="_blank">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</a>
							</li>
							<li class="youtube">
								<a href="https://www.youtube.com/channel/UCYQM_YQPQWen7LocvZ0XN2w" target="_blank">
									<i class="fa fa-play" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<div class="row">
				<p>Copyrights &copy; IEEE PUA SB | Web Development Committee 2020</p>
			</div>
		</div>
	</div>
</footer>


<script src="<?php echo e(URL::to('js/jquery-3.2.0.min.js')); ?>"></script>
<script src="<?php echo e(URL::to('js/wow.js')); ?>"></script>
<script src="<?php echo e(URL::to('js/loading.js')); ?>"></script>
<script>
	new WOW().init();
</script>
<script src="<?php echo e(URL::to('js/bootstrap.min.js')); ?>"></script>


<script src="<?php echo e(URL::to('js/bootstrap.offcanvas.min.js')); ?>"></script>

<script src="<?php echo e(URL::to('js/sweetalert.min.js')); ?>"></script>

<script src="<?php echo e(URL::to('js/admin_alerts.js')); ?>"></script>
<?php if(\Request::route()->getName() == 'about.contact'): ?>
	<script src="<?php echo e(URL::to('js/messageValidateAndSend.js')); ?>"></script>
<?php endif; ?>
<?php if(\Request::route()->getName() == 'mega.event'): ?>
	<script src="<?php echo e(URL::to('js/megaValidation.js')); ?>"></script>
<?php endif; ?>
<?php if(\Request::route()->getName() == 'event.register'): ?>
	<script src="<?php echo e(URL::to('js/eventValidation.js')); ?>"></script>
	<script src="<?php echo e(URL::to('design/adminlte')); ?>/plugins/iCheck/icheck.min.js"></script>
	<script>
		$(function () {
			$('#radio-1').iCheck({
				checkboxClass: 'icheckbox_square-yellow',
				radioClass: 'iradio_square-yellow',
				increaseArea: '20%' /* optional */
			});
			$('#radio-2').iCheck({
				checkboxClass: 'icheckbox_square-yellow',
				radioClass: 'iradio_square-yellow',
				increaseArea: '20%' /* optional */
			});
		});
	</script>
<?php endif; ?>


<?php if(isset($script)): ?>
	<?php if(is_string($script)): ?>
		<script src="<?php echo e(URL::to('js/'.$script.'.js')); ?>"></script>
	<?php elseif(is_array($script)): ?>
		<?php $__currentLoopData = $script; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<script src="<?php echo e(URL::to('js/'.$s.'.js')); ?>"></script>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php endif; ?>
<?php endif; ?>


<script src="<?php echo e(URL::to('js/maincustom.js')); ?>"></script>


<?php if(Session::has('success')): ?>
    <script type="text/javascript">
      suc("<?php echo Session::get('success'); ?>");
  	</script>
<?php endif; ?>

<?php if(Session::has('error')): ?>
    <script type="text/javascript">
      err("<?php echo Session::get('error'); ?>");
  	</script>
<?php endif; ?>

<?php if($errors->any()): ?>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<script type="text/javascript">
	err("<?php echo e($error); ?>");
</script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>


<?php endif; ?>
