<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddEmployeeRequest;
use App\Http\Requests\EditEmployeeRequest;
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
    
    public function store(AddEmployeeRequest $request, MultiAuthUser $multi_auth_user, Employee $employee)
    {
        $input = $request['employee'];
        $multi_auth_user_id = $request['employee.employee_id'];
        $multi_auth_user->id = $multi_auth_user_id;
        $multi_auth_user->save();
        $input += ['multi_auth_user_id' => $multi_auth_user_id];
        $input['password'] = Hash::make($input['password']);
        $employee->employee_id = $multi_auth_user_id;
        $employee->name = $input['name'];
        $employee->email = $input['email'];
        $employee->password = $input['password'];
        $employee->genders = $input['genders'];
        $employee->birthdays = $input['birthdays'];
        $employee->date_of_joining_company = $input['date_of_joining_company'];
        $employee->employment_status = $input['employment_status'];
        $employee->multi_auth_user_id = $input['multi_auth_users'];
        
        return redirect('/admin/info');
    }
    
    public function edit(Employee $employee)
    {
        return view('admin.info_employee.edit')->with(['employee' => $employee]);
    }
    
    public function update(EditEmployeeRequest $request, Employee $employee)
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
