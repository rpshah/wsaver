@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-1">
				<div class="table-responsive-not">
				<table class="table table-hover">
					<thead>
						<span class="lead">List of Areas</span>
						<span class="pull-right"><a href="/area/create" class="btn btn-primary">Add new Area</a></span>
					</thead>
					<tbody>
						<tr>
							<th>Arae Id</th>
							<th>Name</th>
							<th>Latitudes</th>
							<th>Longitudes</th>
							<th class="text-muted" colspan="2">Operations</th>
						</tr>
					</tbody>
					@foreach($areas as $area)
						<tr>
							<td>{{$area->id}}</td>
							<td>{{$area->name}}</td>
							<td>{{$area->latitude_min}} : {{ $area->latitude_max }}</td>
							<td>{{$area->longitude_min}} : {{ $area->longitude_max }}</td>
							<td>
								<a href="/area/update/{{$area->id}}" class="btn btn-info">Change</a>
							</td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'url' => 'area/delete/'.$area->id]) !!}
									{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</table>
				</div>
			</div>
		</div>
	</div>
@endsection