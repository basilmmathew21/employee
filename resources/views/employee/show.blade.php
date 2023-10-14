@extends('adminlte::page')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Employee</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employee.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-1 col-sm-1 col-md-1">
            <div class="form-group">
                <strong>Name:</strong>
            </div>
        </div>
		<div class="col-xs-1 col-sm-1 col-md-1">
            <div class="form-group">
                {{ $employee->name }}
            </div>
        </div>
	</div>
	<div class="row">
	<div class="col-xs-1 col-sm-1 col-md-1">
            <div class="form-group">
                <strong>Gender:</strong>
            </div>
        </div>
		<div class="col-xs-1 col-sm-1 col-md-1">
            <div class="form-group">
                @if($employee->gender == "M") 
                Male
                @else
                Female
                @endif
            </div>
        </div>
	</div>
	<div class="row">
	<div class="col-xs-1 col-sm-1 col-md-1">
            <div class="form-group">
                <strong>Phone:</strong>
            </div>
        </div>
		<div class="col-xs-1 col-sm-1 col-md-1">
            <div class="form-group">
                {{ $employee->phone }}
            </div>
        </div>
	</div>
    <div class="row">
		<div class="col-xs-1 col-sm-1 col-md-1">
            <div class="form-group">
                <strong>Email:</strong>
            </div>
        </div>
		<div class="col-xs-1 col-sm-1 col-md-1">
            <div class="form-group">
                {{ $employee->email }}
            </div>
        </div>
	</div>
    <div class="row">
	<div class="col-xs-1 col-sm-1 col-md-1">
            <div class="form-group">
                <strong>Address:</strong>
            </div>
        </div>
		<div class="col-xs-1 col-sm-1 col-md-1">
            <div class="form-group">
                {{ $employee->address }}
            </div>
        </div>
	</div>    
		
    </div>
@endsection