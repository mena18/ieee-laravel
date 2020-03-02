@extends('admin.index')

@section('content')
   

<h1>Attendees
@if (!empty($event_name))
	For {{$event_name}}
@endif
</h1>

<select class="form-control col-xs-12 col-sm-6 " name="event" onchange="location = this.value;">
	<option value="{{route('attendee.event')}}">...</option>
	@foreach($events as $event)
		<option value="{{route('attendee.event_2',$event->id)}}"
			@if ($id == $event->id)
				selected
			@endif
		 > {{$event->title}} </option>
	@endforeach
</select>

@if (!empty(count($attendees)))
	<div class="box" style="margin-top: 70px">
		<div class="box-header">
			<h3 class="box-title">Event Attendees</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table id="mega_attendees" class="table table-bordered table-striped">
				<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">faculty</th>
					<th scope="col">email</th>
					<th scope="col">semester</th>
					<th scope="col">facebook</th>
					<th scope="col">mobile</th>
					<th scope="col">membership</th>
					@if (empty($event_name))
						<th scope="col">event</th>
					@endif
					<th scope="col">Regestration Time</th>
				</tr>
				</thead>
				<tbody>
					<?php $counter=1; ?>
					@foreach($attendees as $attendee)
						<tr>
							<td>{{$counter}}</td><?php $counter++; ?></td>
							<td>{{$attendee->name}}</td>
							<td>{{$attendee->faculty}}</td>
							<td>{{$attendee->email}}</td>
							<td>{{$attendee->semester}}</td>
							<td><a href="{{$attendee->facebook_profile}}" target="_blank">{{$attendee->facebook_profile}}</a></td>
							<td>{{$attendee->mobile}}</td>
							<td>{{$attendee->membership_type}}</td>
							@if (empty($event_name))
								<td>{{$attendee->event['title']}}</td>
							@endif
							<td>{{$attendee->created_at}}</td>

						</tr>
					@endforeach
				</tbody>
				<tfoot>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">faculty</th>
					<th scope="col">email</th>
					<th scope="col">semester</th>
					<th scope="col">facebook</th>
					<th scope="col">mobile</th>
					<th scope="col">membership</th>
					@if (empty($event_name))
						<th scope="col">event</th>
					@endif
					<th scope="col">Regestration Time</th>
				</tr>
				</tfoot>
			</table>
		</div>
		<!-- /.box-body -->
	</div>
@else
<h1>There Are No Attendees</h1>
@endif

@if(Auth::user()->admin == 1 || Auth::user()->admin == 3)
	<a href="{{route('attendee.download_event',$id)}}" class="btn btn-success">Download</a>
@endif


@endsection