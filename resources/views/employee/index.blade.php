@extends('home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Employee Management</h2>
            </div>
            
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('employee.create') }}"> Add New Employee</a>
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
            <th>Email</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employess as $employee)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->phone }}</td>
            <td>{{ $employee->email }}</td>
            <td>
                <form action="{{ route('employee.destroy',$employee->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('employee.show',$employee->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('employee.edit',$employee->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
    </div>
    {!! $employess->links() !!}
    
    
@endsection

