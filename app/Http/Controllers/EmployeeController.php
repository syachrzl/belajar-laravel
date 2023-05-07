<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = Employee::all();

        return view('employeedata', compact('data'));
    }

    public function create()
    {
        return view('createEmployeeData');
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        Employee::create($request->all());
        return redirect()->route('employee');
    }

    public function showdata($id)
    {
        $data = Employee::find($id);
        // dd($data);

        return view('editEmployeeData', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = Employee::find($id);
        $data->update($request->all());

        return redirect()->route('employee');
    }
}
