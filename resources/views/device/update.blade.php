@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Update Device Data</div>
                <div class="panel-body">
                    @include('layouts.error')
                    {!! Form::open(['method' => 'PATCH' , 'url' => 'device/update/'.$device->id]) !!}
                        <div class="form-group">
                            {!! Form::label('token', '* Enter Token : ') !!}
                            {!! Form::text('token', $device->token, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('vehicle_number', '* Vehicle No on which device is fitted : ') !!}
                            {!! Form::text('vehicle_number', $device->vehicle_number, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Confirm', ['class' => 'btn btn-primary form-control']) !!}    
                        </div>
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
