<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShiftApplication;
use App\Models\ShiftPattern;
use Illuminate\Support\Facades\Auth;

class ShiftApplicationController extends Controller
{
    
    public function index(ShiftApplication $shift_application)
    {
        $selected_employee = Auth::guard('employees')->id();
        $selected_shift_application = $shift_application->where('employee_id', $selected_employee)->get();
        return view('employee.application.index')->with(['shift_applications' => $selected_shift_application]);
    }
    
    public function show(ShiftApplication $shift_application, ShiftPattern $shift_pattern)
    {
        $selected_shift_application_id = $shift_application->id;
        $shift_patterns = $shift_pattern->where('shift_application_id', $selected_shift_application_id)->get();
        return view('employee.application.show')->with(['shift_patterns' => $shift_patterns]);
    }
    
    public function create()
    {
        return view('employee.application.shift.create');
    }
    
    public function store(Request $request, ShiftApplication $shift_application, ShiftPattern $shift_pattern)
    {
        $input = $request['shift_application'];
        $shift_application->employee_id = Auth::guard('employees')->id();
        $shift_application->fill($input)->save();
        
        $input = $request['shift_pattern'];
        for ($i=1;$i<=7;$i++){
            if ($input["start_time{$i}"] && $input["end_time{$i}"]){
                $shift_pattern->shift_application_id = $shift_application->id;
                $shift_pattern->day = $i;
                $shift_pattern->start_time = $input["start_time{$i}"];
                $shift_pattern->end_time = $input["end_time{$i}"];
                $shift_pattern->save();
            }
        }
        
        return redirect('/employee/application/index/{$shift_application->employee_id}');
    }
}
