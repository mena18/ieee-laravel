@extends('layout.body', ['active'=>'events','headerClass'=>'events-hero','script'=>'events'])
@section('title')
	All Mega Events
@endsection

@section('caption')
	<h2>IEEE Mega Events</h2>
@endsection

@section('content')

@if(count($events) > 0)
<section class="events-list">
	<div class="container">
		<div id="events-list" class="row">
			@foreach ($events as $event)
				@include('mega.eventpreview',['event'=>$event])
			@endforeach
		</div>
	</div>
</section>
@else
	<section class="events-list text-center h1">No Events Added</section>
@endif
<script src="{{URL::to('js/btn.js')}}"></script>
@endsection