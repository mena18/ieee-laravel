@extends('admin.index',['script'=>['event_validation']])


@section('content')

@foreach( $errors->all() as $error )
	<div class="alert alert-danger">{{$error}}</div>
@endforeach

<form action="{{route('event.store')}}" id="event-form" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="form-group">
		<label class="control-label">Event Name:</label>
		<input type="text" value="{{old('name')}}" data-check="[^A-Za-z0-9. ]" class="form-control"  id="event-name" placeholder="Event Title" name="name">
	</div>
	<div class="form-group">
		<label class="control-label" for="date">Event Date:</label>
		<input type="date" class="form-control" name="date" placeholder="MM/DD/YYYY" value="{{old('date')}}">
	</div>

	<div class="form-group">
		<label class="control-label">Event Location:</label>
		<input type="text" value="{{old('location')}}" data-check="[^A-Za-z0-9 ,\\-]" placeholder="Event Location" id="event-loc"  class="form-control" name="location">
	</div>
	
	<div class="form-group">
		<label class="control-label">Speakers Names: <i id="addSpeaker" class="fa fa-plus btn btn-success"></i></label>
		<div class="speakers">
			<input type="text" data-check="[^A-Za-z ]" class="form-control" id="speaker-name" placeholder="Speaker's Name" name="speakers[]" value="">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label">Speakers Images:</label>
		<div class="speakers">
			<input name="speakers_images[]" type="file" onchange="ValidateSingleInput(this);">
		</div>
	</div>

	<div class="form-group">
		<label class="control-label">Event Mission:</label>
		<textarea class="form-control textarea" data-check="[^A-Za-z0-9.\\- ,]" id="event-mission"  placeholder="Event Mission" name="mission">{{old('mission')}}</textarea>
	</div>
	<div class="form-group">
		<label class="control-label">Event Goals:</label>
		<textarea class="form-control textarea" id="event-goals" data-check="[^A-Za-z0-9.\\- ,]" placeholder="Event Goals" name="goals">{{old('goals')}}</textarea>
	</div>
	<div class="form-group">
		<select class="form-control" name="event_type">
			<option value="">Select Type</option>
			<option value="workshop">Workshops</option>
			<option value="visit">Visits</option>
			<option value="session">Sessions</option>
		</select>
	</div>

	<div class="form-group">
		<label class="control-label">Event Description:</label>
		<textarea name="description" class="form-control textarea" cols="30" rows="10" data-check="[^A-Za-z0-9.\\- ,]">{{old('description')}}</textarea>
	</div>

	<div class="form-group">
		<label class="control-label">Upload Event Image:</label>
		<input name="event_image" type="file" onchange="ValidateSingleInput(this);">
	</div>

	<input type="submit" class="btn btn-success" id="submit" value="Submit">
</form>

<br><br>


@endsection