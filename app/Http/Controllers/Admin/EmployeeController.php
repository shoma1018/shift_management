<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(Employee $employee)
    {
        return view('admin.info_employee.index')->with(['employees' => $employee->get()]);
    }
}
