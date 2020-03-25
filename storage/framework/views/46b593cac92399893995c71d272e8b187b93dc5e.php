
<header id="masthead" class="site-header container">
	<div class="row">
		<div class="site-branding col-sm-3 col-md-3">
			<h1 class="site-title">
				<a href="<?php echo e(route('home')); ?>" title="IEEE|PUA SB" rel="home">
					<img src="<?php echo e(URL::to('images/ieee-logo.png')); ?>" alt=IEEEPUAsb_logo title="IEEE|PUA SB">
				</a>
			</h1>
		</div>

		<div class="col-sm-9 col-md-9">
			<nav id="site-navigation" class="navbar">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle offcanvas-toggle" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-offcanvas navbar-offcanvas-touch navbar-offcanvas-right" id="js-bootstrap-offcanvas">
					<button type="button" class="offcanvas-toggle closecanvas" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
						<i class="fa fa-times fa-2x" aria-hidden="true"></i>
					</button>
					<ul class="nav navbar-nav">
						<li class="<?php echo e($active==='home'?'active':''); ?>"><a href="<?php echo e(route('home')); ?>">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Activities <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="<?php echo e($active==='events'?'active':''); ?>"><a href="<?php echo e(route('events.all')); ?>">Events</a></li>
								<li class="<?php echo e($active==='mega'?'active':''); ?>"><a href="<?php echo e(route('mega.all')); ?>">Mega Events</a></li>

								<li class="<?php echo e($active==='news'?'active':''); ?>"><a href="<?php echo e(route('news.all')); ?>">News</a></li>
								<li class="<?php echo e($active==='schedule'?'active':''); ?>"><a href="<?php echo e(route('schedule')); ?>">Schedule</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Team<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="<?php echo e($active==='board'?'active':''); ?>"><a href="<?php echo e(route('team.board')); ?>">Board</a></li>
								<li class="<?php echo e($active==='volunteers'?'active':''); ?>"><a href="<?php echo e(route('team.volunteers')); ?>">Volunteers</a></li>
								<li class="<?php echo e($active==='webmasters'?'active':''); ?>"><a href="<?php echo e(route('team.webmasters')); ?>">Web Masters</a></li>

							</ul>
						</li>
						<li class="<?php echo e($active==='gallery'?'active':''); ?>"><a href="<?php echo e(route('gallery')); ?>">Gallery</a></li>
						<li class="<?php echo e($active==='courses'?'active':''); ?>>"><a href="<?php echo e(route('courses.index')); ?>">Courses</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="<?php echo e($active==='about'?'active':''); ?>"><a href="<?php echo e(route('about.index')); ?>">Who Are We?</a></li>
								<li class="<?php echo e($active==='contact'?'active':''); ?>"><a href="<?php echo e(route('about.contact')); ?>">Contact</a></li>
								<li class="<?php echo e($active==='committee'?'active':''); ?>"><a href="<?php echo e(route('about.committees')); ?>">Committees</a></li>
								<li class="<?php echo e($active==='benefits'?'active':''); ?>"><a href="<?php echo e(route('about.benefits')); ?>">IEEE Benefits</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>
<?php /*
$titles = ['home', 'events', 'Web Masters', 'events-single', 'news', 'news-single', 'contact', 'page-not-found', 'schedule', 'login', 'sign-up', '404', 'volunteers', 'contact-login contact', 'gallery', 'schedule', 'contact' ,'offlineCourses', 'onlineCourses'];
$title=strtolower($title);
if (!in_array($title, $titles)) {
	if (!isset($headerClass)){
		$headerClass = 'default-hero';
	}
} else {
	if (isset($headerClass) && $headerClass !== '') {

	} else {
		if ($title ==='home') {
			$headerClass = 'hero-3';
		} elseif ($title === 'login') {
			$headerClass = 'contact-hero';
		} elseif ($title === 'volunteers') {
			$headerClass = 'news-hero';
		} else {
			$headerClass = $title . '-hero';
		}
	}
}*/
?>
<section class="<?php echo e($headerClass); ?>" id="header-section">
	<script>
		document.body.onload = function () {
			if ($('body').height() < $(window).height()) {
				var nxt = $('#header-section').next().eq(0);
				nxt.height(nxt.height() + $(window).height() - $('body').height());
			}
		};
	</script>
	<div class="container">
		<div class="row">
			<div class="hero-content">
				<?php echo $__env->yieldContent('caption'); ?>
			</div>
		</div>
	</div>
</section>
