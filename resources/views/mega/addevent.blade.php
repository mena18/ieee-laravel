@section('title')
{{$title}}
@endsection
@extends('layout.body', ['caption'=>'', 'headerClass'=>'events-hero', 'active'=>'events','script'=>['event_validation']])
@section('content')
<section class="add-event-form">
	<div class="container">
		@if($errors)
			@include('inc.errors',['errors'=>$errors->all()])
		@endif
		@include('mega.eventsform')
	</div>
</section>
@endsection