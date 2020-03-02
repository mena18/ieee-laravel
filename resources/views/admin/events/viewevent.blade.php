@extends('admin.index')

@section('content')
<h1>Events</h1>
@if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
    <a href="{{route('event.create')}}" class="btn btn-success">Create New Event</a>
@endif

<div class="box" style="margin-top: 20px">
    <div class="box-header">
        <h3 class="box-title">Events</h3>
    </div>
    <div class="box-body">
        <table id="mega_attendees" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Registration</th>
                @if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
                <th scope="col"></th>
                @endif
            </tr>
            </thead>
            <tbody>
            <?php $counter=1; ?>
            @foreach($events as $event)
                <tr id='{{$event->id}}'>
                    <td>{{$counter}}</td><?php $counter++; ?>
                    <td><img src="{{URL::to($event->image)}}"></td>
                    <td>{{$event->title}}</td>
                    <td>
                        @if(Auth::user()->admin == 1 || Auth::user()->admin == 3)
                            @if($event->event_open == 1)
                                <a href="{{route('event.toggle',$event->id)}}" class="btn btn-success">Close Registration</a>
                            @else
                                <a href="{{route('event.toggle',$event->id)}}" class="btn btn-danger">Open Registration</a>
                            @endif
                        @endif
                        <a href="{{route('attendee.event_2',$event->id)}}" class="btn btn-primary">Attendees</a>

                    </td>
                    @if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
                        <td>
                            <a href="{{route('event.edit',$event->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                            
                            @if(Auth::user()->admin == 1)
                                <?php $var = 'event.delete' ?>
                                <button   onclick="del('{{route($var,$event->id)}}')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
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
                    <th scope="col">Registration</th>
                    @if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
                        <th scope="col"></th>
                    @endif
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection