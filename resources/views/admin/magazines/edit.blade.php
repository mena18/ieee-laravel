@extends('admin.index')

@section('content')

@foreach( $errors->all() as $error )
	<div class="alert alert-danger">{{$error}}</div>
@endforeach


<form action="{{route('magazine.update',$magazine->id)}}" id="event-form" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}

	<div class="form-group">
		<label class="control-label" for="name">Name : </label>
		<input class="form-control" type="text" name="name" id='name' value="{{$magazine->name}}" placeholder="Name">
	</div>

	<div class="form-group">
		<label class="control-label" for="url">URL : </label>
		<input class="form-control" type="text" name="url" id='url' value="{{$magazine->url}}" placeholder="URL">
	</div>

	<div class="form-group">
		<label class="control-label" for="image"> Cover Image : </label>
		<input id="image" type="file" name='image' class="form-control-file">
	</div>

	<input type="submit" class="btn btn-success" value="Submit">
</form>

<br><br>

@endsection
