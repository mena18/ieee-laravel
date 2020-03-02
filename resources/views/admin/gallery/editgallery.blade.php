@extends('admin.index')


@section('content')

@foreach( $errors->all() as $error )
	<div class="alert alert-danger">{{$error}}</div>
@endforeach


<form action="{{route('gallery.update',$gallery->id)}}" id="event-form" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}

	<div class="form-group">
		<label class="control-label">Gallery Description:</label>
		<textarea name="description" class="form-control textarea" cols="30" rows="10" data-check="[^A-Za-z0-9.\\- ,]">{{$gallery->description}}</textarea>
	</div>

	<div class="form-group">
		<label class="control-label">Upload Gallery Image:</label>
		<input name="url" type="file" onchange="ValidateSingleInput(this);">
	</div>

	<div class="form-group">
		<select class="form-control" name="event_id">
			@foreach($events as $event)
				<option value="{{$event->id}}"
					@if ($gallery->event_id == $event->id)
						selected
					@endif
					>
					{{$event->title}}
				</option>
			@endforeach
		</select>
	</div>


	<input type="submit" class="btn btn-success" id="submit" value="Submit">
</form>

<br><br>


@endsection