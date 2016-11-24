@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Register Yourself here</div>
                <div class="panel-body">
                    @include('layouts.error')
                    {!! Form::open(['url' => 'register']) !!}
                        <div class="form-group">
                            {!! Form::label('name', '*Name : ') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', '*Email : ') !!}
                            {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('password', '*Password : ') !!}
                            {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('repassword', '*RePassword : ') !!}
                            {!! Form::password('repassword', ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('type', '*User is : ') !!}
                            {!! Form::select('type', ['FAMILY_MEMBER' => 'Family Member', 'FAMILY_ADMIN' => 'Family Admin', 'AREA_ADMIN' => 'Area Admin or Governer', 'DEVICE_ADMIN' => 'Device User or Driver'], null, ['placeholder' => 'Who You Are...', 'class' => 'form-control', 'required' => 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('latitude', '*Latitude : ') !!}
                            {!! Form::text('latitude', null, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('longitude', '*Longitude : ') !!}
                            {!! Form::text('longitude', null, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('area_id', '*Area ID : ') !!}
                            {!! Form::number('area_id', null, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('gender', '*Gender : ') !!}
                            {!! Form::select('gender', ['MALE' => 'MALE', 'FEMALE' => 'FEMALE', 'OTHER' => 'OTHER'], null, ['placeholder' => 'Select Gender...', 'class' => 'form-control', 'required' => 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('age', '*Age : ') !!}
                            {!! Form::number('age', null, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('family_id', '*Family Id(Given to Family_Admin) : ') !!}
                            {!! Form::number('family_id', null, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('criteria_id', '*Criteria ID : ') !!}
                            {!! Form::number('criteria_id', 1, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('adharcard_number', '*AdharCard Number(UID) : ') !!}
                            {!! Form::number('adharcard_number', null, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('mobile_number', '*Mobile Number(+91) : ') !!}
                            {!! Form::number('mobile_number', null, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>


                        <div class="form-group">
                            {!! Form::label('rfid_card_number', '*RFID Card Number(+91) : ') !!}
                            {!! Form::text('rfid_card_number', null, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Create User', ['class' => 'btn btn-primary form-control']) !!}    
                        </div>
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
