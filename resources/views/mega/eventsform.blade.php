<form action="{{route($route,$options)}}" id="event-form" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label class="control-label">Event Name:</label>
		<input type="text" data-check="[^A-Za-z0-9. ]" class="form-control"  id="event-name" placeholder="Event Title" name="name" value="{{$event->title?$event->title:old('name')}}">
	</div>
	<div class="form-group">
		<label class="control-label">Event Start Date:</label>
		<input type="text" class="form-control" name="date" value="{{$event->date?$event->date:old('date')}}" placeholder="MM/DD/YYYY">
	</div>
	{{csrf_field()}}
	<div class="form-group">
		<label class="control-label">Event Location:</label>
		<input type="text" data-check="[^A-Za-z0-9 ,\\-]" placeholder="Event Location" id="event-loc"  class="form-control" name="location" value="{{$event->location?$event->location:old('location')}}">
	</div>

	<div class="form-group">
		<label class="control-label">Mega Days:</label>
		<input class="form-control" data-check="[^A-Za-z0-9.\\- ,]" id="event-mega-date"  placeholder="Mega Event Date" name="mega_date" value="{{$event->mega_date?$event->mega_date:old('mega_date')}}"/>
	</div>
	<div class="form-group">
		<label class="control-label">English Description:</label>
		<textarea name="description" class="form-control textarea" cols="30" rows="10" data-check="[^A-Za-z0-9.\\- ,]" placeholder="English Description">{{$event->description?$event->description:old('description')}}</textarea>
	</div>
	<div class="form-group">
		<label class="control-label">Arabic Description:</label>
		<!--                        TODO::ARABIC RegEx For Validation-->
		<textarea class="form-control textarea" id="arabic-description" cols="30" rows="10" data-check="[.]" placeholder="Arabic Description" name="arabic_description">{{$event->arabic_description?$event->arabic_description:old('arabic_description')}}</textarea>
	</div>
	<div class="form-group">
		<label class="control-label">Upload Event Image:</label>
		<input name="event_image" type="file" onchange="ValidateSingleInput(this);">
	</div>
	<input type="submit" class="btn btn-success" id="submit" value="Submit">
</form>