@section('title')
	All News
@endsection
@extends('layout.body',[
'headerClass'=>'news-single-hero',
'active'=>'news'
])
@section('caption')
	<h2>IEEE Latest News</h2>

	<!-- @if(Auth::check())
	<div class="row add-news">
		<a href="{{route('news.create')}}" id="addS">
			<div class="btn btn-lg btn-success"><i class="fa fa-plus"></i> Add News</div>
		</a>
	</div>
	@endif -->
	
@endsection
@section('content')
@if(count($news)>0)
<section class="latest-news">
	<div class="container">
		<div class="row">
			<div class="section-content">
<!--				--><?php
//				foreach ($news as $n) {
//				$images = explode(',',$n['images']);
//				$mainImage = $images[0] === 'none' ? $images[1] : $images[0];
//				$desc_1 = decode($n['description_1']);
//				$desc_2 = decode($n['description_2']);
//				$description = !empty($desc_1)?$desc_1:$desc_2;
//              ?>
				@foreach($news as $n)
				@include('news/newspreview',['news'=>$n])
				@endforeach
			</div>
		</div>
	</div>
</section>
	<!-- 
	@if(Auth::check())
	<div class="alert-box hidden">
		<div class="alert alert-danger h1">
			Are you Sure You Want to Delete this News?
		</div>
		<div class="btns" style="display:flex;justify-content: space-around;align-items: center;">
			<div data-val="1" class="btn btn-danger btn-lg confirmDelete">Yes</div>
			<div data-val="0" class="btn btn-info btn-lg cancelDelete" style="margin-left:20px;">No</div>
		</div>
	</div>
	@endif
	-->
@else
<section class="events-list text-center h1" style="margin:0;">No News Added</section>
@endif
@endsection