<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\MultiAuthUser;
use Illuminate\Support\Facades\Hash;

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
        $latest_multi_auth_user = $multi_auth_user->latest('id')->first();
        $latest_multi_auth_user_id = $latest_multi_auth_user->id;
        $input += ['multi_auth_user_id' => $latest_multi_auth_user_id];
        $input['password'] = Hash::make($input['password']);
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
        $multi_auth_user = MultiAuthUser::find($employee->multi_auth_user_id);
        
        $employee->delete();
        $multi_auth_user->delete();
        
        return redirect('/admin/info');
    }
}
