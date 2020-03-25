@extends('admin.index',['script'=>['event_validation']])

@section('content')
@if(Auth::user()->admin == 1 || Auth::user()->admin == 3)
	@if( $event->event_open==0 )
		<h1>Regestration Closed</h1>
		<a class="btn btn-primary" href="{{route('event.toggle',$event->id)}}">Open Registration</a>
	@else
		<h1>Regestration open</h1>
		<a class="btn btn-danger" href="{{route('event.toggle',$event->id)}}">Close Registration</a>
	@endif
@endif


<form action="{{route('event.update',$event->id)}}" id="event-form" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	<div class="form-group">
		<label class="control-label">Event Name:</label>
		<input type="text" value="{{$event->title ? $event->title : old('name')}}" data-check="[^A-Za-z0-9. ]" class="form-control"  id="event-name" placeholder="Event Title" name="name">
	</div>
	<div class="form-group">
		<label class="control-label">Event Date:</label>
		<input type="date" class="form-control" name="date" placeholder="MM/DD/YYYY" value="{{date('Y-m-d', strtotime($event->date))}}">
	</div>
	<div class="form-group">
		<label class="control-label">Event Location:</label>
		<input type="text" value="{{$event->location}}" data-check="[^A-Za-z0-9 ,\\-]" placeholder="Event Location" id="event-loc"  class="form-control" name="location">
	</div>

	<?php $speakers = explode(',',$event->speakers);?>

	<!-- old id for <i> was  addSpeaker new one is addSpeaker_2-->
	<div class="form-group">
		<label class="control-label">Speakers Names: <i id="addSpeaker" class="fa fa-plus btn btn-success"></i></label>
	<div class="speakers">
	@foreach($speakers as $speaker)
		<input type="text" data-check="[^A-Za-z ]" class="form-control" id="speaker-name" placeholder="Speaker's Name" name="speakers[]" value="{{$speaker}}">
	@endforeach
	</div>
	</div>

	<div class="form-group">
		<label class="control-label">Speakers Images:</label>
		<div class="speakers">
	@foreach($speakers as $speaker)
		<input name="speakers_images[]" type="file" onchange="ValidateSingleInput(this);">
	@endforeach
	</div>
	</div>

	<div class="form-group">
		<label class="control-label">Event Mission:</label>
		<textarea class="form-control textarea" data-check="[^A-Za-z0-9.\\- ,]" id="event-mission"  placeholder="Event Mission" name="mission">{{$event->mission}}</textarea>
	</div>
	<div class="form-group">
		<label class="control-label">Event Goals:</label>
		<textarea class="form-control textarea" id="event-goals" data-check="[^A-Za-z0-9.\\- ,]" placeholder="Event Goals" name="goals">{{$event->goals}}</textarea>
	</div>
	<div class="form-group">
		<label class="control-label" for="event_type" >Event Type</label>
		<select class="form-control" name="event_type" id='event_type'>
			<option {{$event->event_type==''?'selected':null}} value="">Select Type</option>
			<option {{$event->event_type=='workshop'?'selected':null}}  value="workshop">Workshops</option>
			<option {{$event->event_type=='visit'?'selected':null}}  value="visit">Visits</option>
			<option {{$event->event_type=='session'?'selected':null}}  value="session">Sessions</option>
		</select>
	</div>
	<div class="form-group">
		<label class="control-label">Event Description:</label>
		<textarea name="description" class="form-control textarea" cols="30" rows="10" data-check="[^A-Za-z0-9.\\- ,]">{{$event->description}}</textarea>
	</div>
	<div class="form-group">
		<label class="control-label">Upload Event Image:</label>
		<input name="event_image" type="file" onchange="ValidateSingleInput(this);">
	</div>
	<input type="submit" class="btn btn-primary" id="submit" value="Edit">
</form>

@endsection
