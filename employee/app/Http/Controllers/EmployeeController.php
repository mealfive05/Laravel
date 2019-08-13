<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Employee;
class EmployeeController extends Controller
{
    function index() {
        // $d = Department::find(1);
        // return $d->departmentName;

        // $d = Department::find(1)->employees();
        // dd($d->first()->firstName);
        
        // $emp = Employee::find(1);
        // dd($emp->firstName);

        // $d = Employee::find(1)->department();
        // dd($d->first()->departmentName);

        $employeeList = Employee::all();
        return view("employee.index", compact('employeeList'));
    }

    public function edit($id)
    {
        $empp = Employee::find($id);
        return view('employee.edit', compact('empp'));
    }

    public function update(Request $request, $id)
    {
        $emp2 = Employee::find($id);
        $emp2->firstName = $request->firstName;
        $emp2->lastName = $request->lastName;
        $emp2->email = $request->email;
        $emp2->save();
        return redirect("/employee");
    }
}
