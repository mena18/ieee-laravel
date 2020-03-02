@extends('layout.body',[
'headerClass'=>'default-hero',
'active'=>'news',
'script'=>['news_validation']
])
@section('title')
	{{$title}}
@endsection
@section('content')
<section class="add-event-form">
	<div class="container">
		@include('news.newsform')
	</div>
</section>
@endsection