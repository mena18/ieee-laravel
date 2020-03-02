@if(count($events) > 0)
<section class="events-list-single">
	<div class="container">
		<h2 class="related-heading"><span>See Other Events</span></h2>
		<div class="row">
			@foreach($events as $event)
			@include('events.eventpreview',['event'=>$event])
			@endforeach
		</div>
	</div>
</section>
	@if(Auth::check())
		<div class="alert-box hidden">
			<div class="alert alert-danger h1">
				Are you Sure You Want to Delete this Event?
			</div>
			<div class="btns" style="display:flex;justify-content: space-around;align-items: center;">
				<div data-val="1" class="btn btn-danger btn-lg confirmDelete">Yes</div>
				<div data-val="0" class="btn btn-info btn-lg cancelDelete" style="margin-left:20px;">No</div>
			</div>
		</div>
	@endif
@else
<section class="events-list text-center h1">No Events Added</section>
@endif