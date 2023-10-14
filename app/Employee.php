<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    
    protected $fillable = [
        'name',
        'email', 
        'phone', 
        'gender', 
        'address'
                ];

}
