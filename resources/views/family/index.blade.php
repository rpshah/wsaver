@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="table-responsive-not">
				<table class="table table-hover">
					<thead>
						<span class="lead">List of Families</span>
						<span class="pull-right"><a href="/family/create" class="btn btn-primary">Add new Family</a></span>
					</thead>
					<tbody>
						<tr>
							<th>Id</th>
							<th>Family Income</th>
							<th class="text-muted" colspan="2">Operations</th>
						</tr>
					</tbody>
					@foreach($families as $family)
						<tr>
							<td>{{$family->id}}</td>
							<td>{{$family->family_income}}</td>
							<td>
								<a href="/family/update/{{$family->id}}" class="btn btn-info">Change</a>
							</td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'url' => 'family/delete/'.$family->id]) !!}
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