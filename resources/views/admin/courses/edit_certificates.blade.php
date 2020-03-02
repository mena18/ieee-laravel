@extends('admin.index')

@section('content')

@foreach( $errors->all() as $error )
	<div class="alert alert-danger">{{$error}}</div>
@endforeach


<form action="{{route('certificate.update',$certificate->id)}}" id="event-form" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}

	<div class="form-group">
		<label class="control-label" for="name">Name : </label>
		<input class="form-control" type="text" name="name" id='name' value="{{$certificate->name}}" placeholder="Name">
	</div>

	<div class="form-group">
		<label class="control-label" for="serial">Serial : </label>
		<input class="form-control" type="text" name="serial" id='serial' value="{{$certificate->serial}}" placeholder="Serial">
	</div>

	<div class="form-group">
		<label class="control-label" for="link">High Quality link : </label>
		<input class="form-control" type="text" name="link" id='link' value="{{$certificate->link}}" placeholder="Link">
	</div>

	<div class="form-group">
		<label class="control-label" for="course"> Course : </label>
		<select id="course" class="form-control" name="course_id">

			@foreach($courses as $course)
				<option value="{{$course->id}}"@if($certificate->course_id==$course->id) Selected @endif >
				{{$course->name}}
				</option>
				
			@endforeach
		</select>
	</div>


	<input type="submit" class="btn btn-success" id="submit" value="Submit">
</form>

<br><br>

@endsection