@if(count($gallery) > 0)
	<?php $i=0;?>
<section class="featured-gallery">
	<div class="row home-gallery">
		@foreach($gallery as $image)
			<?php $i++;?>
		<div class="col-sm-{{$i==1?6:3}} gallery-item">
			<span class="gallery-img bg flex" data-featherlight="#content-{{$i}}" style="background-image:url('{{$image->url}}')"></span>
			<div id="content-{{$i}}" class="gallery-lightbox">
				<img src="{{URL::to($image->url)}}" alt="{{$image->event_id}}">
				<div class="gallery-lightbox-content">
					<p>{{$image->description}}
						<br>
						<a href="{{route('events.event',['id'=>$image->event_id])}}">
							{{$image->event['title']}}
						</a>

					</p>
				</div>
			</div>
		</div>
	@endforeach
	</div>
</section>
@endif
