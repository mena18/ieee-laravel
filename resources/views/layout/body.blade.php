<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Welcome to the world's largest professional organization dedicated to advancing technological innovation and excellence for the benefit of humanity.">
	<meta name="author" content="IEEE PUA SB">
	<meta property="og:image" content="http://www3.0zz0.com/2017/12/14/21/746492742.png" />
	<meta property="og:title" content="WELCOME TO IEEE PUA SB" />
	<meta property="og:description" content="Welcome to the world's largest professional organization dedicated to advancing technological innovation and excellence for the benefit of humanity." />
	<meta name="theme-color" content="#0F4EA3" />
	<title>@yield('title') | IEEE PUA SB</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="shortcut icon" href="{{URL::to('images/favico.png')}}">
	<link rel="stylesheet" href="{{URL::to('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{URL::to('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::to('css/bootstrap.offcanvas.min.css')}}">
	{{--<link rel="stylesheet" href="{{URL::to('css/bootstrap-datepicker.min.css')}}">--}}
	{{--<link rel="stylesheet" href="{{URL::to('css/bootstrap-select.min.css')}}">--}}
	@if(\Request::route()->getName() == 'event.register')
		<link rel="stylesheet" href="{{URL::to('design/adminlte')}}/plugins/iCheck/square/yellow.css">
	@endif
	<link rel="stylesheet" href="{{URL::to('css/animate.css')}}">
	<link rel="stylesheet" href="{{URL::to('css/hover.min.css')}}">
	<link rel="stylesheet" href="{{URL::to('css/core.css')}}">

	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="{{URL::to('css/style.css')}}">
	<link rel="stylesheet" href="{{URL::to('css/responsive.css')}}">

	<!--New Styles-->
	<link rel="stylesheet" href="{{URL::to('css/customstyle.css')}}">
	@if(isset($mega) && $mega!==null)
	<link rel="stylesheet" href="{{URL::to('css/megaForm.css')}}">
	@endif
</head>
<body>
@include('inc.header')
@yield('content')
@include('inc.footer')

</body>
</html>
