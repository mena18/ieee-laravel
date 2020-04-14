@extends('admin.index')
@section('content')

    <div class="box" style="margin-top: 20px; padding: 15px">
        <h3>From: {{$message->name}}</h3>
        <h3>Mobile: {{$message->mobile}}</h3>
        <h3>Email: {{$message->email}}</h3>
        <br><br>
        <h4>Message: </h4>
        <p>{{$message->message}}</p>
    </div>
@endsection
