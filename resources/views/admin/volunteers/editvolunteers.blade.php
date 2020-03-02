@extends('admin.index')


@section('content')

@foreach($errors->all() as $error)
	<h1 class="alert alert-danger">{{$error}}</h1>
@endforeach

<form action="{{route('volunteer.update',$volunteer->id)}}" id="event-form" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	<div class="form-group">
		<label class="control-label" for="name">Volunteer Name:</label>
		<input type="text" data-check="[^A-z0-9 ]" value="{{$volunteer->name}}" class="form-control" placeholder="Volunteer Name"
					 name="name" id='name'>
	</div>
	

	<div class="form-group">
		<label class="control-label" for="committee">Committee :</label>
		<input type="text" data-check="[^A-z0-9 ,\\-]" placeholder="Volunteer Committee"
					 class="form-control" name="committee" id='committee' value="{{$volunteer->committee}}">
	</div>

	<div class="form-group">
		<label class="control-label" for='img'>Image :</label>
		<!--                    <label class="control-label">img :</label>-->
		<input type="file" class="form-control" name="img" id='img'>
		<!--                    <input type="text" placeholder="Volunteer img"   class="form-control" name="img" required>-->
	</div>

	<div class="form-group">
		<label class="control-label" for='facebook'>Facebook URL :</label>
		<input type="text" class="form-control" data-check="[^A-z0-9 ,\\-\\(.)]" placeholder="Facebook URL"
					 name="facebook" id='facebook' value="{{$volunteer->facebook}}">
	</div>

	<div class="form-group">
		<label class="control-label" for='linkedin'>Linkedin URL :</label>
		<input type="text" class="form-control" data-check="[^A-z0-9 ,\\-\\(.)]" placeholder="Linkedin URL"
					 name="linkedin" id='linkedin' value="{{$volunteer->linkedin}}">
	</div>

	<input type="submit" class="btn btn-success" id="submit" value="Edit">
</form>
<br><br>





@endsection

