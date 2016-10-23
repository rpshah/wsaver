@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Add new Area</div>
                <div class="panel-body">
                    @include('layouts.error')
                    {!! Form::open(['method' => 'PATCH', 'url' => 'area/update/'.$area->id]) !!}
                        <div class="form-group">
                            {!! Form::label('name', '* Area Name : ') !!}
                            {!! Form::text('name', $area->name, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('latitude_min', '* Min Latitude : ') !!}
                            {!! Form::text('latitude_min', $area->latitude_min , ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('latitude_max', '* Max Latitude : ') !!}
                            {!! Form::text('latitude_max', $area->latitude_max , ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('longitude_min', '* Min Longitude : ') !!}
                            {!! Form::text('longitude_min', $area->longitude_min , ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('longitude_max', '* Max Longitude : ') !!}
                            {!! Form::text('longitude_max',  $area->longitude_max , ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Change Area Data', ['class' => 'btn btn-info form-control']) !!}    
                        </div>
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
