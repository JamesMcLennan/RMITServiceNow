@extends('layout.master')
@section('title', 'Request Service')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Request Service</h2>
                </div>
            </div>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <hr>
        {!! Form::model($query, ['action' => 'CustomerQueryController@store']) !!}
        <div class="form-group row">
            {!! Form::label('serviceArea', 'Service Type', array('class' => 'col-md-2 col-form-label')) !!}
            <div class="col-md-10">
                {!! Form::select('serviceArea', ['Gmail' => 'Gmail', 'Computer' => 'Computer (Hardware)',
                    'Network' => 'Network'], ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('workArea', 'Work Area', array('class' => 'col-md-2 col-form-label')) !!}
            <div class="col-md-10">
                {!! Form::select('workArea', ['Art' => 'Art', 'Economics, Finance and Marketing' =>
                    'Economics, Finance and Marketing', 'Engineering' => 'Engineering',
                    'Science' => 'Science', 'Business IT and Logistics' => 'Business IT and Logistics'],
                    ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('problemDescription', 'Request Description', array('class' => 'col-md-2 col-form-label')) !!}
            <div class="col-md-10">
                {!! Form::text('problemDescription', '', ['class' => 'form-control']) !!}
            </div>
        </div>

        <button class="btn btn-success" type="submit">Submit Request</button>

        {!! Form::close() !!}
    </div>
@endsection
