@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Update Criteria</div>
                <div class="panel-body">
                    @include('layouts.error')
                    {!! Form::open(['method' => 'PATCH' , 'url' => 'criteria/update/'.$criteria->id]) !!}
                        <div class="form-group">
                            {!! Form::label('gender', '*Gender : ') !!}
                            {!! Form::select('gender', ['MALE' => 'MALE', 'FEMALE' => 'FEMALE', 'OTHER' => 'OTHER'], $criteria->gender, ['placeholder' => 'Select Gender...', 'class' => 'form-control', 'required' => 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('age_max', '* Max Aged people : ') !!}
                            {!! Form::number('age_max', $criteria->age_max, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('family_income_max', '* Annual Income of Family : ') !!}
                            {!! Form::text('family_income_max', $criteria->family_income_max, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('area_id', '* For Areas : ') !!}
                            {!! Form::select('area_id', $areas->all(), $criteria->area_id, ['placeholder' => 'Select Area...', 'class' => 'form-control', 'required' => 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('daily_allowence', '* Daily Water Allowed : ') !!}
                            {!! Form::text('daily_allowence', $criteria->daily_allowence, ['class' => 'form-control', 'required' => 'required']) !!}    
                        </div>

                        <div class="form-group">
                            {!! Form::label('monthly_allowence', '* Monthly Water Allowed : ') !!}
                            {!! Form::text('monthly_allowence', $criteria->monthly_allowence, ['class' => 'form-control', 'required' => 'required']) !!}    
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
