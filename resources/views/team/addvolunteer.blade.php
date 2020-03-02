@extends('layout.body',['active'=>'volunteer','headerClass'=>'news-hero'])
@section('title')
	Add Volunteer
@endsection
@section('caption')@endsection
@section('content')
<section class="add-event-form">
	<div class="container">
		<form action="{{route('volunteer.store')}}" id="event-form" method="post"
					enctype="multipart/form-data">

			<div class="form-group">
				<label class="control-label">Volunteer Name:</label>
				<input type="text" data-check="[^A-z0-9 ]" class="form-control" placeholder="Volunteer Name"
							 name="name">
			</div>
			{{csrf_field()}}

			<div class="form-group">
				<label class="control-label">Committee :</label>
				<input type="text" data-check="[^A-z0-9 ,\\-]" placeholder="Volunteer Committee"
							 class="form-control" name="committee">
			</div>

			<div class="form-group">
				<label class="control-label">Image :</label>
				<!--                    <label class="control-label">img :</label>-->
				<input type="file" class="form-control" name="img">
				<!--                    <input type="text" placeholder="Volunteer img"   class="form-control" name="img" required>-->
			</div>

			<div class="form-group">
				<label class="control-label">Facebook URL :</label>
				<input type="text" class="form-control" data-check="[^A-z0-9 ,\\-\\(.)]" placeholder="Facebook URL"
							 name="facebook">
			</div>

			<div class="form-group">
				<label class="control-label">Linkedin URL :</label>
				<input type="text" class="form-control" data-check="[^A-z0-9 ,\\-\\(.)]" placeholder="Linkedin URL"
							 name="linkedin">
			</div>

			<input type="submit" class="btn btn-success" id="submit" value="Submit">
		</form>

	</div>
</section>
@endsection