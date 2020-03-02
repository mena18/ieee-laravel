<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{$certificate->name}}</title>
	<link rel="stylesheet" href="{{URL::to('css/certificateFonts.css')}}">
	<link rel="stylesheet" href="{{URL::to('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{URL::to('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::to('css/style.css')}}">
</head>
<body>
<section class="certification col-xs-12">
	<h1 class="attendeeName">{{$certificate->name}}</h1>
	<p class="courseName">{{$certificate->course()->get()->first()->name}}</p>
	<p class="hoursOfCourse">{{$certificate->attendance}}</p>
	<p class="serial">{{$certificate->serial}}</p>
	<img src="{{URL::to("images/signature.png")}} alt="counselor signature" class="signature">
</section>
<a href="{{$certificate->link}}">
	<div class="btn btn-primary">Show in High Quality</div>
</a>
<script src="{{URL::to('js/jquery-3.2.0.min.js')}}"></script>
<script src="{{URL::to('js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('js/certificate.js')}}"></script>
</body>
</html>