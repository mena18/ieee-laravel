@extends('layout.body', ['active'=>'events','headerClass'=>'events-hero','script'=>'events'])
@section('title')
	All Events
@endsection
@section('content')
<section class="events-search-filter" style="background-color:#fff;">
	<div class="container">
		<div class="row">
			<div class="section-content clearfix">
				<div class="col-sm-4 btn-body">
					<a href="#" id="visits" class="btn" data-title="Visits" data-index='0'></a>
				</div>
				<div class="col-sm-4 btn-body">
					<a href="#" id="workshop" class="btn" data-title="Workshops" data-index='1'></a>
				</div>
				<div class="col-sm-4 btn-body">
					<a href="#" id="sessions" class="btn" data-title="Sessions" data-index='2'></a>
				</div>
			</div>
		</div>
	</div>
</section>
@if(count($events) > 0)
<section class="events-list">
	<div class="container">
		<div id="events-list" class="row">
			@foreach ($events as $event)
				@include('events.eventpreview',['event'=>$event])
			@endforeach
		</div>
	</div>
</section>
@else
	<section class="events-list text-center h1">No Events Added</section>
@endif
@endsection