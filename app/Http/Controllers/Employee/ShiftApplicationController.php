<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShiftApplicationRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\ShiftApplication;
use App\Models\ShiftPattern;
use App\Models\ShiftAccept;


class ShiftApplicationController extends Controller
{
    public function create()
    {
        $selected_employee = Auth::guard('employees')->user();
        return view('employee.application.shift.create')->with(['employee' => $selected_employee]);
    }
    
    public function store(ShiftApplicationRequest $request, ShiftApplication $shift_application)
    {
        $input = $request['shift_application'];
        $employee_id = Auth::guard('employees')->id();
        $shift_application->employee_id = $employee_id;
        $shift_application_id = $shift_application->max('id') + 1;
        $shift_application->id = $shift_application_id;
        $shift_application->comment = $input['comment'];
        $shift_application->save();
        
        $input = $request['shift_pattern'];
        
        for ($i=1;$i<=7;$i++){
            if ($input["start_time{$i}"] && $input["end_time{$i}"]){
                $shift_pattern = new ShiftPattern;
                $shift_pattern_id = $shift_pattern->max('id') + 1;
                $shift_pattern->id = $shift_pattern_id;
                $shift_pattern->shift_application_id = $shift_application->id;
                $shift_pattern->day = $i;
                $shift_pattern->start_time = $input["start_time{$i}"];
                $shift_pattern->end_time = $input["end_time{$i}"];
                $shift_pattern->save();
            }
        }
        
        $shift_accept = new ShiftAccept();
        $shift_accept->shift_application_id = $shift_application->id;
        $shift_accept->comment = "";
        $shift_accept->save();
        
        return redirect("/employee/application/{$employee_id}");
    }
}
