@extends('admin.index')

@section('content')

@foreach( $errors->all() as $error )
	<div class="alert alert-danger">{{$error}}</div>
@endforeach


<form action="{{route('course.update',$course->id)}}" id="event-form" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}

	<div class="form-group">
		<label class="control-label" for="name">Name : </label>
		<input class="form-control" type="text" name="name" id='name' value="{{$course->name}}" placeholder="Name">
	</div>

	<div class="form-group">
		<label class="control-label" for="hours">Hours : </label>
		<input class="form-control" type="text" name="hours" id='hours' value="{{$course->hours}}" placeholder="Hours">
	</div>

	<div class="form-group">
		<label class="control-label" for="code">Code : </label>
		<input class="form-control" type="text" name="code" id='code' value="{{$course->code}}" placeholder="AA">
	</div>

	<div class="form-group">
		<label class="control-label" for="type">Type : </label>
		<select id="type" class="form-control" name="type">
			<option @if( $course['type'] =='mid_year') selected @endif value="mid_year">Mid Year Course</option>
			<option @if( $course['type'] =='summer') selected @endif value="summer">Summer Course</option>
		</select>
	</div>

	<div class="form-group">
		<label class="control-label" for="open">Course Status : </label>
		<select id="type" class="form-control" name="open">
			<option @if( $course['open'] =='1') selected @endif value="1">Open</option>
			<option @if( $course['open'] =='0') selected @endif value="0">Done</option>
		</select>
	</div>

	<div class="form-group">
		<label class="control-label" for="description">description : </label>
		<textarea class="form-control textarea" cols="30" rows="20" placeholder="Description You can leave it empty" name="description" id='description'>{!! $course->description !!}</textarea>
	</div>

	<input type="submit" class="btn btn-success" id="submit" value="Submit">
</form>

<br><br>

@endsection
