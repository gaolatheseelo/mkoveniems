<?php

namespace App\Imports;

use App\Models\Employees;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee ([
            'employee_number'     => $row['employee_number'],
            'first_name'    => $row['first_name'],
            'surname' => $row['surname'],
            'date_of_birth'     => $row['date_of_birth'],
            'position'    => $row['position'],
            'start_date' => $row['start_date' ],
            'department'     => $row['department'],
            'annual_salary'    => $row['annual_salary'],
            'manager_employee_number'     => $row['manager_employee_number'],
            'project_code_1'    => $row['project_code_1'],
            'project_code_2' => $row['project_code_2'],
            'project_code_3' => $row['project_code_3'],
        ]);
    }
}
