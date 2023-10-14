<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSkills extends Model
{
    use HasFactory;

    protected $table = 'employee_skills';

    
    protected $fillable = ['employee_id','skill_name','ratings','remarks'];
}
