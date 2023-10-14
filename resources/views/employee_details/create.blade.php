@extends('adminlte::page')  
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Employee Details</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('employeedetails.index') }}"> Back</a>
        </div>
    </div>
</div>


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('employeedetails.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
            <label>Employee Name<span class="text-danger">*</span></label>
            
            <select name="employee_id" class="form-control" required>
                <option value="">--Select--</option>
                @foreach($employees as $employee)
                <option @if(old('employee_id') == $employee->id) selected @endif   value="{{$employee->id}}">{{$employee->name}}</option>
                @endforeach
            </select>
            </div>
        </div>

  		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Job Title<span class="text-danger">*</span></label>
                <input type="text" name="job_title" class="form-control" placeholder="Job Title" required>
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Company name<span class="text-danger">*</span></label>
                <input type="text" name="company_name" class="form-control" placeholder="Company Name" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Experience (Years)</label>
                <input type="number" step="0.1" name="years_experience" class="form-control" placeholder="Experience">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <label>Join date</label>
                <input id="join_date" type="text" name="join_date" class="form-control" placeholder="Join date">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <label>Releaving date</label>
                <input id="releave_date" type="text" name="releave_date" class="form-control" placeholder="Releaving date">
            </div>
        </div>
		
		
		<div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>

<script type="text/javascript">

    $( "#releave_date,#join_date" ).datepicker({dateFormat:"dd-mm-yy"});

</script>
@endsection

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script> 

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">   
