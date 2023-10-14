@extends('home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Employee Management</h2>
            </div>
            
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('employeedetails.create') }}"> Add Employee details</a>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-lg-12 margin-tb">
        <br/>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    </div>
    </div>
     <div class="row">
     <div class="col-lg-12 margin-tb">
         <br/>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Job Title</th>
            <th>Company Name</th>
            <th>Experience (Years)</th>
            <th>Joining date</th>
            <th>Releaved date</th>
        </tr>
        @foreach ($employess as $employee)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->job_title }}</td>
            <td>{{ $employee->company_name }}</td>
            <td>{{ $employee->years_experience }}</td>
            <td>@if($employee->join_date) {{ date("d-m-Y",strtotime($employee->join_date)) }} @endif</td>
            <td>@if($employee->join_date) {{ date("d-m-Y",strtotime($employee->releave_date)) }} @endif</td>
        </tr>
        @endforeach
    </table>
    </div>
    </div>
    {!! $employess->links() !!}
    
    
@endsection

