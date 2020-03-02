@extends('admin.index')

@section('content')
   

<h1>Gallery</h1>
@if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
    <a href="{{route('gallery.create')}}" class="btn btn-success">Add New Image</a>
@endif


<div class="box" style="margin-top: 20px">
    <div class="box-header">
        <h3 class="box-title">Gallary</h3>
    </div>
    <div class="box-body">
        <table id="mega_attendees" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">Event</th>
                <th scope="col">Description</th>
                @if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
                    <th scope="col"></th>
                @endif
            </tr>
            </thead>
            <tbody>
            <?php $counter=1; ?>
            @foreach($gallerys as $gallery)
                <tr id='{{$gallery->id}}'>
                    <td>{{$counter}}</td><?php $counter++; ?>
                    <td><img src="{{URL::to($gallery->url)}}"></td>
                    <td>{{$gallery->event['title']}}</td>
                    <td>{!!$gallery->description!!}</td>
                    @if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
                        <td>
                            <a href="{{route('gallery.edit',$gallery->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                            <?php $var = 'gallery.delete' ?>
                            <button   onclick="del('{{route($var,$gallery->id)}}')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">Event</th>
                <th scope="col">Description</th>
                @if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
                    <th scope="col"></th>
                @endif
            </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection