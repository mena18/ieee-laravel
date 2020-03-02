@extends('admin.index',['script'=>'event_validation'])

@section('content')

@foreach( $errors->all() as $error )
	<div class="alert alert-danger">{{$error}}</div>
@endforeach

<form action="{{ route('mega.store')}}" id="event-form" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="form-group">
		<label class="control-label">Event Name:</label>
		<input type="text" value="{{old('name')}}" data-check="[^A-Za-z0-9. ]" class="form-control"  id="event-name" placeholder="Event Title" name="name">
	</div>
	<div class="form-group">
		<label class="control-label" for="date">Event Date:</label>
		<input type="date" value="{{old('date')}}" class="form-control" id="date" name="date" placeholder="MM/DD/YYYY">
	</div>
	<div class="form-group">
		<label class="control-label">Event Location:</label>
		<input type="text" value="{{old('location')}}" data-check="[^A-Za-z0-9 ,\\-]" placeholder="Event Location" id="event-loc"  class="form-control" name="location">
	</div>
	
	<div class="form-group">
		<label class="control-label">Mega Days:</label>
		<input class="form-control" data-check="[^A-Za-z0-9.\\- ,]" id="event-mega-date"  placeholder="Mega Event Date" name="mega_date" value="{{old('mega_date')}}"/>
	</div>

	<div class="form-group">
		<label class="control-label">English Description:</label>
		<textarea name="description" id="en-description" class="form-control textarea" cols="30" rows="10" data-check="[^A-Za-z0-9.\\- ,]" placeholder="English Description">{{old('description')}}</textarea>
	</div>

	<div class="form-group">
		<label class="control-label">Arabic Description:</label>
		<!--TODO::ARABIC RegEx For Validation-->
		<textarea class="form-control textarea" id="ar-description" cols="30" rows="10" data-check="[.]" placeholder="Arabic Description" name="arabic_description">{{old('arabic_description')}}</textarea>
	</div>

	<div class="form-group">
		<label class="control-label">Upload Event Image:</label>
		<input name="event_image" type="file" onchange="ValidateSingleInput(this);">
	</div>

	<input type="submit" class="btn btn-success" id="submit" value="Submit">
</form>



<br><br>


@endsection