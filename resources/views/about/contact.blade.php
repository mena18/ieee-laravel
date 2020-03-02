@extends('layout.body',['headerClass'=>'contact-hero','active'=>'contact'])
@section('title')
	Contact
@endsection
@section('caption')
	<h2>Get in Touch with Us</h2>
@endsection
@section('content')

	<section class="contact-form">
		<div class="container">
			<div class="section-content contact-content clearfix">
				<h3>Send us a Message</h3>
				<form>
					<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
					<div class="row">
						<div class="form-group col-sm-6">
							<label>Full Name</label>
							<input type="text" id="name" class="form-control" placeholder="">
						</div>
						<div class="form-group col-sm-6">
							<label>Phone Number</label>
							<input type="text" id="mobile" class="form-control" placeholder="">
						</div>

					</div>
					<div class="row">
						<div class="form-group col-sm-12">
							<label>Email</label>
							<input type="email" id="email" class="form-control" placeholder="">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-12">
							<label>Message</label>
							<textarea id="content"></textarea>
						</div>
					</div>
					<input class="hvr-push" type="submit" data-url="{{URL::to('about/contact')}}" value="Send" id="sendMessage">
				</form>
				<div id="errors" class="hidden" style="margin-top: 90px;">
					<ul class="alert alert-danger"></ul>
				</div>
			</div>
		</div>
	</section>


	<section class="contact-information">
		<div class="container">
			<div class="section-content">
				<h3>Contact Information</h3>
				<ul>
					<li>
						<i class="fa fa-map-marker" aria-hidden="true"></i> PUA, Canal El Mahmoudia Street, Ezbet El-Nozha, Qism Sidi Gabir,<br>Alexandria Governorate,<br>Egypt.
					</li>
					<li>
						<i class="fa fa-phone" aria-hidden="true"></i>
						<a href="tel:01061396963">01061396963 - </a>
						<a href="tel:01141722689">01141722689 - </a>
						<a href="tel:01222474955">01222474955</a>
					</li>
					<li>
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<a href="email:contact@ieeepuasb.org">contact@ieeepuasb.org</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="contact-form">
		<div class="container">
			<div id="mapmap" class="google-maps clearfix" style="padding:0;">
				<iframe width="1040" height="541" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJYezcVKPE9RQRfXCO93uEo2o&key=AIzaSyDPs2pRc2N4Qr2wZEgbZfupwygQfSClb8c" allowfullscreen></iframe>
			</div>
		</div>
	</section>

	<script>
		function initMap() {
			var uluru = {
				lat: 31.205938,
				lng: 29.960275
			};
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 15,
				center: uluru
			});
			var marker = new google.maps.Marker({
				position: uluru,
				map: map
			});
		}

	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?AIzaSyDMi9itK7tyMhbRUWBi1GHZjDlVX6hWv4E&callback=initMap"></script>
@endsection