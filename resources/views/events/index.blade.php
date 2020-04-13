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
					<a href="{{route('events.all','visit')}}" id="visits" class="btn <?php if($name=='visit'){echo 'btnActive';} ?>" data-title="Visits" data-index='0'></a>
				</div>
				<div class="col-sm-4 btn-body">
					<a href="{{route('events.all','workshop')}}" id="workshop" class="btn <?php if($name=='workshop'){echo 'btnActive';} ?>" data-title="Workshops" data-index='1'></a>
				</div>
				<div class="col-sm-4 btn-body">
					<a href="{{route('events.all','session')}}" id="sessions" class="btn <?php if($name=='session'){echo 'btnActive';} ?>" data-title="Sessions" data-index='2'></a>
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
