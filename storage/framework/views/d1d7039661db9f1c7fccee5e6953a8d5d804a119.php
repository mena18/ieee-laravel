<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $__env->yieldContent('title'); ?> | IEEE PUA SB</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="shortcut icon" href="<?php echo e(URL::to('images/favico.png')); ?>">
	<link rel="stylesheet" href="<?php echo e(URL::to('css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(URL::to('css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(URL::to('css/bootstrap.offcanvas.min.css')); ?>">
	
	
	<?php if(\Request::route()->getName() == 'event.register'): ?>
		<link rel="stylesheet" href="<?php echo e(URL::to('design/adminlte')); ?>/plugins/iCheck/square/yellow.css">
	<?php endif; ?>
	<link rel="stylesheet" href="<?php echo e(URL::to('css/animate.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(URL::to('css/hover.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(URL::to('css/core.css')); ?>">

	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?php echo e(URL::to('css/style.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(URL::to('css/responsive.css')); ?>">

	<!--New Styles-->
	<link rel="stylesheet" href="<?php echo e(URL::to('css/customstyle.css')); ?>">
	<?php if(isset($mega) && $mega!==null): ?>
	<link rel="stylesheet" href="<?php echo e(URL::to('css/megaForm.css')); ?>">
	<?php endif; ?>
</head>
<body>
<?php echo $__env->make('inc.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>
</html>
