@extends('admin.index')
@section('content')


    <h1>Messages</h1>
    <div class="box" style="margin-top: 20px">
        <div class="box-header">
            <h3 class="box-title">All Messages</h3>
        </div>
        <div class="box-body">
            <table id="mega_attendees" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">mobile</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sent At (DD/MM/YYYY)</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php $counter=1; ?>
                @foreach($messages as $message)
                    <tr id='{{$message->id}}'>
                        <td>{{$counter}}</td><?php $counter++; ?>
                        <td>{{$message->name}}</td>
                        <td>{{$message->mobile}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->created_at->format('d/m/Y H:i')}}</td>
                        <td>
                            <a href="{{route('messages.show',$message->id)}}" class="btn btn-primary"><i class="fa fa-book"></i> Read Message</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">mobile</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sent At (DD/MM/YYYY)</th>
                    <th scope="col"></th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection