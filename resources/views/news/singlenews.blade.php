{{--Get News and show it--}}
@extends('layout.body',['headerClass'=>'news-single-hero','active'=>'news'])
@section('title')
{{ucfirst($news->title)}}
@endsection
@section('caption')
<h2>{{ucfirst($news->title)}}</h2>
@endsection


@section('content')
<?php $images = explode(',',$news->images); 
	if(sizeof($images) == 1){
		$images[1]='none';
	}
?>
	<section class="news-single-content">
		<div class="container">
			<div class="row">
				<div class="section-content">
					@if ($images[0]!=='none')
					<section class="news-single-full-image">
						<center><img src="{{ URL::to($images[0]) }}" alt="{{ucfirst($news->title)}}"></center>
					</section>
					@endif
					@if (!is_null($news->description_1))
					<p>{!!$news->description_1!!}</p>
					@endif
					@if($images[1]!=='none')
					<section class="news-single-full-image">
						<center><img src="{{ URL::to($images[1]) }}" alt="{{ucfirst($news->title)}}"></center>
					</section>
					<br><br><br>
					@endif
					@if(!is_null($news->description_2))
					<p>{!!$news->description_2!!}</p>
					@endif
				</div>
			</div>
		</div>
	</section>
@endsection