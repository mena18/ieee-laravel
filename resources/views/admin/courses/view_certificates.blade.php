@extends('admin.index')

@section('content')

@if(Auth::user()->admin == 1)
	<a class="btn btn-success" href="{{route('certificate.create')}}">Add new Certificate</a>
@endif

@if (!empty(count($certificates)))
	<div class="box" style="margin-top: 20px">
		<div class="box-header">
			<h3 class="box-title">Certificates</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<table id="mega_attendees" class="table table-bordered table-striped">
				<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Serial</th>
					<th scope="col">Link</th>
					<th scope="col">Course</th>
					<th scope="col">Receiving Time</th>
					@if(Auth::user()->admin == 1)
						<th scope="col">Edit</th>
						<th scope="col">Delete</th>
					@endif
				</tr>
				</thead>
				<tbody>
				<?php $counter=1; ?>
				@foreach($certificates as $cer)
					<tr id="{{$cer->id}}">
						<td>{{$counter}}</td><?php $counter++; ?></td>
						<td>{{$cer->name}}</td>
						<td>{{$cer->serial}}</td>
						<td>{{$cer->link}}</td>
						<td>{{$cer->course['name']}}</td>
						<td>{{$cer->created_at}}</td>
						@if(Auth::user()->admin == 1)
							<td><a class="btn btn-success" href="{{route('certificate.edit',$cer->id)}}"><i class="fa fa-edit"></i> Edit</a></td>
							<td>
								<?php $var = route("certificate.delete",$cer->id) ?>
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
					<th scope="col">Serial</th>
					<th scope="col">Course</th>
					<th scope="col">Receiving Time</th>
					@if(Auth::user()->admin == 1)
						<th scope="col">Edit</th>
						<th scope="col">Delete</th>
					@endif
				</tr>
				</tfoot>
			</table>
		</div>
		<!-- /.box-body -->
	</div>
@else
<h1>There Are No certificates</h1>
@endif

@endsection