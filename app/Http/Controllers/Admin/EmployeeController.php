<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\MultiAuthUser;

class EmployeeController extends Controller
{
    public function index(Employee $employee)
    {
        return view('admin.info_employee.index')->with(['employees' => $employee->get()]);
    }
    
    public function create() 
    {
        return view('admin.info_employee.create');
    }
    
    public function store(Request $request, MultiAuthUser $multi_auth_user, Employee $employee)
    {
        $input = $request['employee'];
        $multi_auth_user->fill($input)->save();
        $a = $multi_auth_user->latest('id')->first();
        $b = $a->id;
        $input += ['multi_auth_user_id' => $b];
        $employee->fill($input)->save();
        return redirect('/admin/info');
    }
    
    public function edit(Employee $employee)
    {
        return view('admin.info_employee.edit')->with(['employee' => $employee]);
    }
    
    public function update(Request $request, Employee $employee)
    {
        $input = $request['employee'];
        $employee->fill($input)->save();
        return redirect('/admin/info');
    }
    
    public function delete(Employee $employee)
    {
        $employee->delete();
        return redirect('/admin/info');
    }
}
