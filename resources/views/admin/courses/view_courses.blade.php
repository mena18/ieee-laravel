@extends('admin.index')

@section('content')

@if(Auth::user()->admin == 1)
	<a class="btn btn-success" href="{{route('course.create')}}">Create New Course</a>
@endif

<h1> Courses </h1>

@if (!empty(count($courses)))

	<div class="box" style="margin-top: 20px">
		<div class="box-header">
			<h3 class="box-title">Courses</h3>
		</div>
		<div class="box-body">
			<table id="mega_attendees" class="table table-bordered table-striped">
				<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">hours</th>
					<th scope="col">Attendees</th>
					<th scope="col">Status</th>
					<th scope="col">type</th>
					<th scope="col">code</th>
					<th scope="col">Description</th>
					@if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
						<th scope="col"></th>
					@endif
					@if(Auth::user()->admin == 1)
						<th scope="col"></th>
					@endif
				</tr>
				</thead>
				<tbody>
				<?php $counter=1; ?>
				@foreach($courses as $course)
					<tr id="{{$course->id}}">
						<td>{{$counter}}</td><?php $counter++; ?></td>
						<td>{{$course->name}}</td>
						<td>{{$course->hours}}</td>
						<td>{{count($course->certificates)}}</td>
						<td class="{{$course->open=='1'?'green':'red'}}">{{$course->open=='1'?"Open":"Done"}}</td>
						<td>{{$course->type}}</td>
						<td>{{$course->code}}</td>
						<td>{{preg_replace("(\<.*?\>)", " ", substr($course->description, 0, 60))}}...</td>
						@if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
							<td><a class="btn btn-primary" href="{{route('course.edit',$course->id)}}"><i class="fa fa-edit"></i> Edit</a></td>
						@endif
						@if(Auth::user()->admin == 1)
							<td>
								<?php $var = route("course.delete",$course->id) ?>
								<button  onclick="del('{{$var}}')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
							</td>
						@endif
					</tr>
				@endforeach
				</tbody>
				<tfoot>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">hours</th>
					<th scope="col">Attendees</th>
					<th scope="col">Status</th>
					<th scope="col">type</th>
					<th scope="col">Description</th>
					@if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
						<th scope="col"></th>
					@endif
					@if(Auth::user()->admin == 1)
						<th scope="col"></th>
					@endif
				</tr>
				</tfoot>
			</table>
		</div>
	</div>
@else
<h1>There Are No Courses</h1>
@endif


@endsection
