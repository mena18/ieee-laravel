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
	<?php $path = URL::to('images/new_certificate.jpg') ?>
	<style>
	    .certification{
	      position: relative;
	      background-image: url(<?=$path?>);
	      width:1024px;  /*1125*/ /*0.8*/
	      height:760px; /*739*/ /*0.86*/
				background-size: 100% 100%;
	    }
	    .certification .attendeeName {
	      font-family: Arial Black;
	      position: absolute;
				width:100%;
	      top: 340px;
	      color:#7d3e68;
	      font-weight: 900;
				text-align: center;
				font-size:35px;

	    }
	    .certification .courseName,
	    .certification .hoursOfCourse {
	        font-family: MYRIADPROREGULAR;
	        font-size: 20px;
	        position: absolute;
	        color:#615E70;

	    }
	    .certification .courseName {
	        top: 411px;
	        left: 57%;
	        /* transform: translate(-50%, 0); */
	        font-weight: 800;
	    }
	    .certification .hoursOfCourse {
	      top: 443px;
	      left: 64%;
	      font-weight: 800;
	    }

		</style>
</head>
<body>
<section class="certification col-xs-12">
	<div class="attendeeName"><p ><?php echo e($certificate->name); ?></p></div>
	<p class="courseName"><?php echo e($certificate->course->name); ?></p>
	<p class="hoursOfCourse"><?php echo e($certificate->course->hours); ?></p>
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