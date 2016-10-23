@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="table-responsive-not">
				<table class="table table-hover">
					<thead>
						<span class="lead">List of Criterias</span>
						<span class="pull-right"><a href="/criteria/create" class="btn btn-primary">Add new Criteria</a></span>
					</thead>
					<tbody>
						<tr>
							<th>Id</th>
							<th>Gender</th>
							<th>Max Age</th>
							<th>Family Income</th>
							<th>Area</th>
							<th>Daily Allowence</th>
							<th>Monthly Allowence</th>
							<th class="text-muted" colspan="2">Operations</th>
						</tr>
					</tbody>
					@foreach($criterias as $criteria)
						<tr>
							<td>{{$criteria->id}}</td>
							<td>{{$criteria->gender}}</td>
							<td>{{$criteria->age_max}}</td>
							<td>{{$criteria->family_income_max}}</td>
							<td>{{$criteria->area_id}}</td>
							<td>{{$criteria->daily_allowence}}</td>
							<td>{{$criteria->monthly_allowence}}</td>
							<td>
								<a href="/criteria/update/{{$criteria->id}}" class="btn btn-info">Change</a>
							</td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'url' => 'criteria/delete/'.$criteria->id]) !!}
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