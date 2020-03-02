@extends('layout.body',['active'=>'volunteers','headerClass'=>'news-hero'])
@section('title')
	Our Volunteers
@endsection
@section('caption')
<h2>Volunteers</h2>
@endsection
@section('content')
<section class="volunteersSection">
	<div class="container">
		<div class="rowvolunteer">
			<hr class="hrVolunteer">

			@foreach($volunteers as $volunteer)
				@include('team.volunteermini', ['volunteer'=>$volunteer])
			@endforeach


			<div class="clearfix"></div>
			<hr class="hrVolunteer1">
		</div>
	</div>
</section>
@endsection