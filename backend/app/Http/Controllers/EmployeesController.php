<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EmployeesImport;
use App\Exports\EmployeesExport;
use App\Models\Employees;

class EmployeesController extends Controller
{
    public function results()
    {
       $employees = Employees::all();
       return response() ->json ([
            'status' => 200,
           'employees'=>$employees
           
       ]);

    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImportExport()
    {
       return view('file-import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImport(Request $request) 
    {
        Excel::import(new EmployeesImport, $request->file('file')->store('temp'));
        return back();
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport() 
    {
        return Excel::download(new EmployeesExport, 'employees-collection.xlsx');
    }    
}