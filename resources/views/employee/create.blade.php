@extends('adminlte::page')  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Employee</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('employee.index') }}"> Back</a>
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
   
<form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label>Name<span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label>Gender<span class="text-danger">*</span></label>
                               <select name="gender" class="form-control" required>
                                    <option value="">--Select--</option>
                                    <option @if(old('gender') == "M") selected @endif   value="M">Male</option>
                                    <option @if(old('gender') == "F") selected @endif   value="F">Female</option>
                               </select>
                            </div>
                        </div>

		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Phone<span class="text-danger">*</span></label>
                <input type="text" name="phone" class="form-control" placeholder="Phone" required>
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Email<span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" style="height:150px" name="address" placeholder="Address"></textarea>
            </div>
        </div>
		
		
		<div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection