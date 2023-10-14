@extends('home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Employee Management</h2>
            </div>
            
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('employeeskills.create') }}"> Add Employee skills</a>
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
            <th>Employee Name</th>
            <th>Skill Name</th>
            <th>Rating</th>
            <th>Remarks</th>
        </tr>
        @foreach ($employess as $employee)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->skill_name }}</td>
            <td>{{ $employee->ratings }}</td>
            <td>{{ $employee->remarks }}</td>
        </tr>
        @endforeach
    </table>
    </div>
    </div>
    {!! $employess->links() !!}
    
    
@endsection

