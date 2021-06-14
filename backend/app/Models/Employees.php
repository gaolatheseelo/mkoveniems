<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factory\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    //use HasFactory, Notifiable;

    protected $table ='employees';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_number',
        'first_name',
        'surname',
        'date_of_birth',
        'position',
        'start_date',
        'department',
        'annual_salary',
        'manager_employee_number',
        'project_code_1',
        'project_code_2',
        'project_code_3',
    ];

  
}