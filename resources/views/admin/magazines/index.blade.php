@extends('admin.index')

@section('content')

@if(Auth::user()->admin == 1)
	<a class="btn btn-success" href="{{route('magazine.create')}}">ADD New Magazine</a>
@endif

<h1> Magazines </h1>

@if (!empty(count($magazines)))

	<div class="box" style="margin-top: 20px">
		<div class="box-header">
			<h3 class="box-title">Magazines</h3>
		</div>
		<div class="box-body">
			<table id="mega_attendees" class="table table-bordered table-striped">
				<thead>
				<tr>
					<th scope="col">#</th>
          <th scope="col">image</th>
          <th scope="col">Name</th>
					<th scope="col">url</th>
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
				@foreach($magazines as $magazine)
					<tr id="{{$magazine->id}}">
						<td>{{$counter}}</td><?php $counter++; ?></td>
						<td> <img src="{{URL::TO($magazine->image)}}" >  </td>
						<td>{{$magazine->name}}</td>
						<td>{{$magazine->url}}</td>
						@if(Auth::user()->admin == 1 || Auth::user()->admin == 2)
							<td><a class="btn btn-primary" href="{{route('magazine.edit',$magazine->id)}}"><i class="fa fa-edit"></i> Edit</a></td>
						@endif
						@if(Auth::user()->admin == 1)
							<td>
								<?php $var = route("magazine.delete",$magazine->id) ?>
								<button  onclick="del('{{$var}}')" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
							</td>
						@endif
					</tr>
				@endforeach
				</tbody>
				<tfoot>
          <tr>
  					<th scope="col">#</th>
            <th scope="col">image</th>
            <th scope="col">Name</th>
  					<th scope="col">url</th>
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
<h1>There Are No Magazines</h1>
@endif


@endsection
