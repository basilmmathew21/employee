<?php

namespace App\Http\Controllers;

use App\EmployeeDetails;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeDetailsController extends Controller
{
    
    public function index()
    {
        $employess = EmployeeDetails::select(['employees.name','employee_details.*'])->leftJoin('employees','employee_details.employee_id','=','employees.id')->latest()->paginate(5);
  
        return view('employee_details.index',compact('employess'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::where('is_active',1)->get();
        return view('employee_details.create',compact('employees'));
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
            'job_title'         =>  'required|string|min:1|max:255',
            'company_name'      =>  'required|string|min:1|max:255',
            'employee_id'       =>  '',
            "years_experience"  =>  '',
			'join_date'         =>  '',
			'releave_date'      =>  '',
        ]);
		$data		=	$request->all();
		if($data['join_date'] != ""){
            $data['join_date'] = date("Y-m-d",strtotime($data['join_date']));
        }
        if($data['releave_date'] != ""){
            $data['releave_date'] = date("Y-m-d",strtotime($data['releave_date']));
        }
        EmployeeDetails::create($data);
   
        return redirect()->route('employeedetails.index')
                        ->with('success','Employee details created successfully.');
    }

}
