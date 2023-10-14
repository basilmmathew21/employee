@extends('adminlte::page')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Employee</h2>
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
  
    <form action="{{ route('employee.update',$employee->id) }}" method="POST"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label>Name<span class="text-danger">*</span></label>
                    <input type="text" name="name" value="{{ $employee->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
			
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                        <label>Gender<span class="text-danger">*</span></label>
                        <select name="gender" class="form-control" required>
                                    <option value="">--Select--</option>
                                    <option @if(old('gender',$employee->gender) == "M") selected @endif   value="M">Male</option>
                                    <option @if(old('gender',$employee->gender) == "F") selected @endif   value="F">Female</option>
                               </select>
                            </div>
                        </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
                <label>Phone<span class="text-danger">*</span></label>
					<input type="text" name="phone" value="{{ $employee->phone }}" class="form-control" placeholder="phone">
				</div>
			</div>
			
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label>Email<span class="text-danger">*</span></label>
                    <input type="text" name="email" value="{{ $employee->email }}" class="form-control" placeholder="Email">                </div>
            </div>
			
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" style="height:150px" name="address" placeholder="Address">{{$employee->address}}</textarea>
            </div>
            </div>
		
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script>
$(document).ready(function(){
 
});
</script>
