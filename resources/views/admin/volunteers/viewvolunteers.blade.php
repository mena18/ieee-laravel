@extends('admin.index')

@section('content')


<h1>Volunteers</h1>
@if(Auth::user()->admin == 1)
    <a href="{{route('volunteer.create')}}" class="btn btn-success">+ Add New volunteers</a>
@endif


<div class="box" style="margin-top: 20px">
    <div class="box-header">
        <h3 class="box-title">Volunteers</h3>
    </div>
    <div class="box-body">
        <table id="mega_attendees" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Committee</th>
                @if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
                    <th scope="col"></th>
                @endif
            </tr>
            </thead>
            <tbody>
            <?php $counter=1; ?>
            @foreach($volunteers as $volunteer)
                <tr id='{{$volunteer->id}}'>
                    <td>{{$counter}}</td><?php $counter++; ?>
                    <td><img src="{{URL::to($volunteer->img)}}"></td>
                    <td>{{$volunteer->name}}</td>
                    <td>{{$volunteer->committee}}</td>
                    @if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
                        <td>
                            <a href="{{route('volunteer.edit',$volunteer->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                            <?php $var = 'volunteer.delete' ?>
                            @if(Auth::user()->admin == 1)
                                <?php $var = 'volunteer.delete' ?>
                                <button onclick="del('{{route($var,$volunteer->id)}}')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
                            @endif
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
                <th scope="col">Committee</th>
                @if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
                    <th scope="col"></th>
                @endif
            </tr>
            </tfoot>
        </table>
    </div>
</div>
@if(Auth::user()->admin == 1 || Auth::user()->admin == 3)
    <a href="{{route('volunteer.download')}}" class="btn btn-success">Download</a>
@endif
@endsection
