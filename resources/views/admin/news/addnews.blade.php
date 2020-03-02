@extends('admin.index')

@section('content')

@foreach( $errors->all() as $error )
	<div class="alert alert-danger">{{$error}}</div>
@endforeach

<form action="{{route('news.store')}}" id="news-form" method="post" enctype="multipart/form-data">
	{{csrf_field()}}

	<div class="form-group">
		<label class="control-label">News Title:</label>
		<input type="text" data-check="[^A-Za-z0-9. ]" class="form-control"  id="event-name" placeholder="News Title" name="title" value="{{old('title')}}">
	</div>

	<div class="form-group">
		<label class="control-label">News Date:</label>
		<input type="date" class="form-control" name="date" placeholder="MM/DD/YYYY" value="{{old('date')}}">
	</div>

	<div class="form-group">
		<label class="control-label">News Main Image:</label>
		<input name="top_image" type="file" onchange="ValidateSingleInput(this);">
	</div>

	<div class="form-group">
		<label class="control-label">News Content:</label>
		<textarea name="description_1" class="form-control textarea" cols="30" rows="10" data-check="[^A-Za-z0-9.\\- ,]" placeholder="Add Your Content">{{old('description_1')}}</textarea>
	</div>

	<div class="form-group">
		<label class="control-label">News Image at Middle:</label>
		<input name="middle_image" id="second_image" type="file">
	</div>
	
	<div class="form-group">
		<label class="control-label">News Content After Image:</label>
		<textarea name="description_2" class="form-control textarea" cols="30" rows="10" data-check="[^A-Za-z0-9.\\- ,]" placeholder="Leave Empty if you don't want to add More Content">{{old('description_2')}}</textarea>
	</div>

	<input type="submit" class="btn btn-success" id="submit" value="Submit">

</form>

<br><br>


@endsection