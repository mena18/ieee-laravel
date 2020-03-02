@extends('admin.index')

@section('content')
   

<h1>News </h1>
@if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
    <a href="{{route('news.create')}}" class="btn btn-success">Create New News</a>
@endif

<div class="box" style="margin-top: 20px">
    <div class="box-header">
        <h3 class="box-title">News</h3>
    </div>


    <div class="box-body">
        <table id="mega_attendees" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">Name</th>
                @if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
                    <th scope="col"></th>
                @endif
            </tr>
            </thead>
            <tbody>
            <?php $counter=1; ?>
            @foreach($newss as $news)
                <tr id='{{$news->id}}'>
                    <td>{{$counter}}</td><?php $counter++; ?>
                    <?php $img = explode(",", $news->images); ?>
                    <td><img src="{{URL::to($img[0])}}">

                    </td>
                    <td>{{$news->title}}</td>
                    @if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
                        <td>
                            <a href="{{route('news.edit',$news->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                            <?php $var = 'news.delete' ?>
                            <button   onclick="del('{{route($var,$news->id)}}')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">Name</th>
                @if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
                    <th scope="col"></th>
                @endif
            </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection
