@extends('layout.body',['headerClass'=>'events-hero','active'=>'magazine','script'=>'magazine'])
@section('title')
	IEEE MAGAZINE
@endsection
@section('caption')
	<h2>IEEE MAGAZINE</h2>
@endsection

@section('content')

  <section class="magazines">
    <div class="container">

			@if (count($magazines)>0)
				@foreach ($magazines as $magazine)
		      <div class="magazine">
		        <a href="{{route('magazine.show',$magazine->id)}}">
		          <img src="{{URL::to($magazine->image)}}">
		          <h2>{{$magazine->name}}</h2>
		        </a>
		      </div>
			
		      @endforeach
			@else
				<div>
					<h1>Coming Soon</h1>
				</div>
			@endif
    </div>
  </section >


@endsection
