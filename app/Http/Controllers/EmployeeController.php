<?php

namespace App\Http\Controllers;

use App\Models\Employye;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private  $employees;
    private $employee;

    public function addEmployee()
    {
        return view('front.employee.add');
    }

    public function create(Request $request)
    {
        Employye:: getNewEmployee($request);
        return redirect()->back()->with('message', 'New Employee is recorded successfully.') ;
    }
    public function edit($id)
    {
        $this->employee = Employye::find($id);
        return view('front.employee.edit-employee', ['employee' => $this->employee]);

    }
    public function update(Request $request, $id)
    {
        Employye:: updateEmployee($request, $id);
        return redirect('/all-employee')->with('message', 'Employee Info Updated Successfully');
    }

    public function delete($id)
    {
        Employye:: deleteEmployee($id);
        return redirect('/all-employee')->with('message', 'Employee Deleted Successfully');

    }

    public function allEmploye()
    {
        $this->employees = Employye::all();
        return view('front.employee.all-employee', ['employees' => $this->employees]);
    }

}
