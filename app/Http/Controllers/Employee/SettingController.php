<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index()
    {
        $selected_employee = Auth::guard('employees')->user();
        return view('employee.setting.index')->with(['employee' => $selected_employee]);
    }
    
    public function edit()
    {
        $selected_employee = Auth::guard('employees')->user();
        return view('employee.setting.edit')->with(['employee' => $selected_employee]);
    }
    
    public function update(Request $request, Employee $employee)
    {
        $input = $request['employee'];
        $employee->fill($input)->save();
        return redirect('/employee/setting');
    }
}
