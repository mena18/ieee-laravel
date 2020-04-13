@extends('layout.body',['headerClass'=>'events-hero','active'=>'gallery','script'=>'gallery3'])
@section('title')
	IEEE Gallery
@endsection
@section('caption')
	<h2>IEEE Gellery</h2>
@endsection

@section('content')

<style type="text/css">
	.up{
		margin-top: 90px;
	}
    .btn:focus, .btn:active, button:focus, button:active {
      outline: none !important;
      box-shadow: none !important;
    }
    #image-gallery .modal-footer{
      display: block;
    }
    .thumb{
      margin-top: 15px;
      margin-bottom: 15px;
    }
		.img-thumbnail{
			width:330px;
			height:220px;
		}
</style>
<div class="up"></div>

<div class="container image-container">
    <div class="row">

        <div class="row">
            @foreach($gallery as $img)
            <div class="col-sm-6 gallery-item thumb ">
                <!-- <a href="{{route('events.event',$img->event_id)}}"><h4>{{$img->event['title']}}</h4></a> -->
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="{{strip_tags($img->description)}}"
                   data-image="{{URL::to($img->url)}}"
                   data-target="#image-gallery">
                    <img style="width:330px;height=220px;" class="img-thumbnail"
                         src="{{URL::to($img->url)}}"
                         alt="Another alt text">
                </a>
            </div>
            @endforeach
        </div>

        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
