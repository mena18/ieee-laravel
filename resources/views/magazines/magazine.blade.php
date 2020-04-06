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
      <div class="magazine-preview">
        <iframe width="800px" height="700px" src="{{$magazine->url}}" frameborder="0" allowfullscreen allowtransparency></iframe>
      </div>

    </div>
  </section >


@endsection
