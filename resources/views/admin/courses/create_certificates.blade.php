@extends('admin.index')

@section('content')

@foreach( $errors->all() as $error )
	<div class="alert alert-danger">{{$error}}</div>
@endforeach


<form action="{{route('certificate.store')}}" id="event-form" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}

	<div class="form-group">
		<label class="control-label" for="name">Name : </label>
		<input class="form-control" type="text" name="name" id='name' value="{{old('name')}}" placeholder="Name">
	</div>

	<div class="form-group">
		<label class="control-label" for="course"> Course : </label>
		<select id="course" class="form-control" name="course_id">
			@foreach($courses as $course)
				<option value="{{$course->id}}">{{$course->name}}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label class="control-label" for="email">Email : </label>
		<input class="form-control" type="text" name="email" id='email' value="{{old('email')}}" placeholder="Email">
	</div>

	<input type="submit" class="btn btn-success" id="submit" value="Submit">
</form>


<h1> or upload many certificates </h1>
<p>file should contains 2 columns (name:the name of the attendee,course:the name of the course)</p>
<form action="{{route('certificate.upload')}}"  method="post" enctype="multipart/form-data">
	{{ csrf_field() }}

	<div class="form-group">
		<label class="control-label" for="file"> File : </label>
		<input id="file" type="file" name='file' class="form-control-file">
	</div>

	<input type="submit" class="btn btn-success" value="Upload">
</form>

<br><br>

@endsection
