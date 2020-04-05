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
      <div class="magazine">
        <a href="{{route('magazine.show')}}">
          <img src="{{URL::to('images/mag.jpg')}}">
          <h2>First Edition</h2>
        </a>
      </div>

    </div>
  </section >


@endsection
