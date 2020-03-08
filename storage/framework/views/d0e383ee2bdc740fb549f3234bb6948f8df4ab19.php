<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo e($certificate->name); ?></title>
	<link rel="stylesheet" href="<?php echo e(URL::to('css/certificateFonts.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(URL::to('css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(URL::to('css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(URL::to('css/style.css')); ?>">
</head>
<body>
<section class="certification col-xs-12">
	<h1 class="attendeeName"><?php echo e($certificate->name); ?></h1>
	<p class="courseName"><?php echo e($certificate->course()->get()->first()->name); ?></p>
	<p class="hoursOfCourse"><?php echo e($certificate->attendance); ?></p>
	<p class="serial"><?php echo e($certificate->serial); ?></p>
	<!-- <img src="<?php echo e(URL::to('images/signature.png')); ?>" alt="counselor signature" class="signature"> -->
</section>
<a id="certificate" download>
	<div class="btn btn-primary">Download</div>
</a>
<script src="<?php echo e(URL::to('js/jquery-3.2.0.min.js')); ?>"></script>
<script src="<?php echo e(URL::to('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(URL::to('js/certificate.js')); ?>"></script>
<script src="<?php echo e(URL::to('js/html2canvas.js')); ?>"></script>
<script>
window.onload = function(){
	html2canvas(document.querySelector(".certification")).then(canvas => {
		var img    = canvas.toDataURL("image/png");
		var a = document.getElementById('certificate')
		a.href = img;
		//document.write('<img src="'+img+'"/>');
	});
}
</script>
</body>
</html>
