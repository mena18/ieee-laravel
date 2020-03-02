@extends('admin.index')

@section('content')


@foreach( $errors->all() as $error )
	<div class="alert alert-danger">{{$error}}</div>
@endforeach

<form action="{{route('volunteer.store')}}" id="event-form" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	<div class="form-group">
		<label class="control-label" for="name">Volunteer Name:</label>
		<input type="text" data-check="[^A-z0-9 ]" class="form-control" placeholder="Volunteer Name"
					 name="name" id='name'>
	</div>
	

	<div class="form-group">
		<label class="control-label" for="committee">Committee :</label>
		<input type="text" data-check="[^A-z0-9 ,\\-]" placeholder="Volunteer Committee"
					 class="form-control" name="committee" id='committee'>
	</div>

	<div class="form-group">
		<label class="control-label" for='img'>Image :  (618px X 618px)</label>
		<input type="file" class="form-control" name="img" id='img'>
	</div>

	<div class="form-group">
		<label class="control-label" for='facebook'>Facebook URL :</label>
		<input type="text" class="form-control" data-check="[^A-z0-9 ,\\-\\(.)]" placeholder="Facebook URL"
					 name="facebook" id='facebook'>
	</div>

	<div class="form-group">
		<label class="control-label" for='linkedin'>Linkedin URL :</label>
		<input type="text" class="form-control" data-check="[^A-z0-9 ,\\-\\(.)]" placeholder="Linkedin URL"
					 name="linkedin" id='linkedin'>
	</div>

	<input type="submit" class="btn btn-success" id="submit" value="Submit">
</form>

<br><br>


@endsection