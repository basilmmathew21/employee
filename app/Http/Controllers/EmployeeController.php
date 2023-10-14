<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employess = Employee::latest()->paginate(5);
  
        return view('employee.index',compact('employess'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  =>  'required|string|min:1|max:255',
            'phone' =>  'required|digits_between:10,12',
            "email" =>  'required|max:255|email',
			'address' =>  'max:50000',
			'gender' =>  'required|string|min:1|max:1',
        ]);
		$data		=	$request->all();
		
		
  
        Employee::create($data);
   
        return redirect()->route('employee.index')
                        ->with('success','Employee created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
	 
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name'  =>  'required|string|min:1|max:255',
            'phone' =>  'required|digits_between:10,12',
            "email" =>  'required|max:255|email',
			'address' =>  'max:50000',
			'gender' =>  'required|string|min:1|max:1',
        ]);
		$data		=	$request->all();
		
		
  
        $employee->update($data);
  
        return redirect()->route('employee.index')
                        ->with('success','Employee details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
  
        return redirect()->route('employee.index')
                        ->with('success','Employee deleted successfully');
    }
}
