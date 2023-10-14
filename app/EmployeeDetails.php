<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDetails extends Model
{
    use HasFactory;

    protected $table = 'employee_details';

    
    protected $fillable = [
        'job_title',
        'employee_id', 
        'company_name', 
        'years_experience', 
        'join_date',
        'releave_date'
                ];
}
