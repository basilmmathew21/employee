@extends('adminlte::page')  
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Employee Skills</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('employeeskills.index') }}"> Back</a>
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
   
<form action="{{ route('employeeskills.store') }}" method="POST" enctype="multipart/form-data">
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
                <label>Skill Name<span class="text-danger">*</span></label>
                <input type="text" name="skill_name" class="form-control" placeholder="Skill Name" required>
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Remarks</label>
                <input type="text" name="remarks" class="form-control" placeholder="Remarks">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Ratings</label>
                <input type="number" min="1" max="5" name="ratings" class="form-control" placeholder="Ratings">
            </div>
        </div>

       <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>

@endsection
