@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Add new Area</div>
                <div class="panel-body">
                    @include('layouts.error')
                    {!! Form::open(['url' => 'area/create']) !!}
                        <div class="form-group">
                            {!! Form::label('name', '* Area Name : ') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('latitude_min', '* Min Latitude : ') !!}
                            {!! Form::number('latitude_min', null, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('latitude_max', '* Max Latitude : ') !!}
                            {!! Form::number('latitude_max', null, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('longitude_min', '* Min Longitude : ') !!}
                            {!! Form::number('longitude_min', null, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('longitude_max', '* Max Longitude : ') !!}
                            {!! Form::number('longitude_max', null, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Add Area', ['class' => 'btn btn-success form-control']) !!}    
                        </div>
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
