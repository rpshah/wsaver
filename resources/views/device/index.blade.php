@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="table-responsive-not">
				<table class="table table-hover">
					<thead>
						<span class="lead">List of Devices</span>
						<span class="pull-right"><a href="/device/create" class="btn btn-primary">Add new Device</a></span>
					</thead>
					<tbody>
						<tr>
							<th>Id</th>
							<th>Token</th>
							<th>Vehicle Number</th>
							<th class="text-muted" colspan="2">Operations</th>
						</tr>
					</tbody>
					@foreach($devices as $device)
						<tr>
							<td>{{$device->id}}</td>
							<td>{{$device->token}}</td>
							<td>{{$device->vehicle_number}}</td>
							<td>
								<a href="/device/update/{{$device->id}}" class="btn btn-info">Change</a>
							</td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'url' => 'device/delete/'.$device->id]) !!}
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