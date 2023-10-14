<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeSkills;
use App\Employee;

class SkillsController extends Controller
{
    public function index()
    {
        $employess = EmployeeSkills::select(['employees.name','employee_skills.*'])->leftJoin('employees','employee_skills.employee_id','=','employees.id')->latest()->paginate(5);
  
        return view('employee_skills.index',compact('employess'))
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
        return view('employee_skills.create',compact('employees'));
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
            'skill_name'      =>  'required|string|min:1|max:255',
            'employee_id'     =>  'required',
            "remarks"         =>  '',
			'ratings'         =>  '',
        ]);
		$data		=	$request->all();
		
        EmployeeSkills::create($data);
   
        return redirect()->route('employeeskills.index')
                        ->with('success','Employee skills details added successfully.');
    }
}
