@extends('admin.index')

@section('content')
   

<h1>Attendees
@if (!empty($event_name))
	For {{$event_name}}
@endif
</h1>

<select class="form-control col-xs-12 col-sm-6 " name="event" onchange="location = this.value;">
	<option value="{{ route('attendee.mega') }}">...</option>
	@foreach($events as $event)
		<option value="{{ route('attendee.mega_2', $event->id) }}"
			@if ($id == $event->id)
				selected
			@endif
		 > {{$event->title}} </option>
	@endforeach
</select>

@if (!empty(count($attendees)))
	<div class="box" style="margin-top: 70px">
			<div class="box-header">
				<h3 class="box-title">Mega Events Attendees</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="mega_attendees" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="col">Email</th>
							<th scope="col">Mobile</th>
							<th scope="col">National ID</th>
							<th scope="col">University</th>
							<th scope="col">Status</th>
							<th scope="col">Member</th>
							<th scope="col">Code</th>
							@if (empty($event_name))
								<th scope="col">event</th>
							@endif
						</tr>
					</thead>
					<tbody>
					<?php $counter=1; ?>
					@foreach($attendees as $attendee)
						<tr>
							<td>{{$counter}}</td><?php $counter++; ?></td>
							<td>{{$attendee->name}}</td>
							<td>{{$attendee->email}}</td>
							<td>{{$attendee->mobile}}</td>
							<td>{{$attendee->national_id}}</td>
							<td>{{$attendee->university}}</td>
							<td>{{$attendee->a_status}}</td>
							<td>{{$attendee->ieee_member}}</td>
							<td>{{$attendee->code}}</td>
							@if (empty($event_name))
								<td>{{$attendee->event['title']}}</td>
							@endif
						</tr>
					@endforeach
					</tbody>
					<tfoot>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Name</th>
						<th scope="col">Email</th>
						<th scope="col">Mobile</th>
						<th scope="col">National ID</th>
						<th scope="col">University</th>
						<th scope="col">Status</th>
						<th scope="col">Member</th>
						<th scope="col">Code</th>
						@if (empty($event_name))
							<th scope="col">event</th>
						@endif
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
	<a href="{{route('attendee.download_mega',$id)}}" class="btn btn-success">Download</a>
@endif


@endsection