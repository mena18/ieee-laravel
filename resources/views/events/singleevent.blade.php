@section('title')
{{ucfirst($event->title)}}
@endsection
@extends('layout.body',[
'headerClass'=>'events-single-hero',
'active'=>'events'
])
@section('caption')
	<span class=\"tag\">{{ucfirst($event->event_type)}}</span><h2>{{ucfirst($event->title)}}</h2>
	<p>{{$event->location}} | <span>{{date('M d, Y', strtotime($event->date))}}</span></p>
@endsection
<?php
$speakersNames = explode(',', $event->speakers);
$speakersImages = explode(',', $event->speakers_images);
$speakers = [];
$i = 0;
foreach($speakersNames as $speaker) {
	$speakers[] = [
		'name'  => $speaker,
		'image' => $speakersImages[$i]
	];
	$i++;
}
?>
@section('content')
<section class="events-single-content">
	<div class="container">
		<div class="row">
			<div class="events-single-about col-md-4">
				<h3>{{$event->title}}</h3>

				<h4>Mission:</h4><br>
				<div class="event-des">
					<p>
						{!!$event->mission!!}
					</p>
				</div>
				<h4>Goals:</h4><br>
				<div class="event-des">
					<p>
						{!!$event->goals!!}
					</p>
				</div>
				<h4>More About this Event:</h4><br>
				<p>{!!$event->description!!}</p>
				@if ($event->event_open)
					<a href="{{route('event.register',['id'=>$event->id])}}"><div class="btn btn-info">Register Attendance</div></a>
				@endif
			</div>
			<div class="events-single-speakers col-md-4">
				<h3>SPEAKERS</h3>
				@if (count($speakers) > 0)
					@foreach($speakers as $speaker)
					<div class="speaker-item">
						<div class="col-sm-3">
							<img src="{{URL::to($speaker['image'])}}" alt="image">
							<div style="background-image:url('<?php echo $speaker['image'];?>')"></div>
						</div>
						<div class="col-sm-9">
							<h4>{{$speaker['name']}}</h4>
							<!--<p>Graphic Designer</p>-->
						</div>
					</div>
					@endforeach
				@else
				<div class="speaker-item">
					<div class="alert alert-info">
						No Speakers Added.
					</div>
				</div>
				@endif
			</div>
			<div class="events-single-location col-md-4">
				<h3>LOCATION</h3>
				<p>{{$event->location}}</p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6824.982541309847!2d29.963499116865766!3d31.207116081474375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6aa3847bf78e707d!2z2KzYp9mF2LnYqSDZgdin2LHZiNizINio2KfZhNil2LPZg9mG2K_YsdmK2Kk!5e0!3m2!1sar!2seg!4v1506517535097" width="800" height="300" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>
{{--Other Four--}}

<div class="alert-box hidden">
	<div class="alert alert-danger h1">
		Are you Sure You Want to Delete this Event?
	</div>
	<div class="btns" style="display:flex;justify-content: space-around;align-items: center;">
		<div data-val="1" class="btn btn-danger btn-lg confirmDelete">Yes</div>
		<div data-val="0" class="btn btn-info btn-lg cancelDelete" style="margin-left:20px;">No</div>
	</div>
</div>
@endsection