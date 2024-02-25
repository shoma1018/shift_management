<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\AbsenceApplicationRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\AbsenceApplication;
use App\Models\AbsenceShift;
use App\Models\AbsenceAccept;


class AbsenceApplicationController extends Controller
{
    public function create()
    {
        $selected_employee = Auth::guard('employees')->user();
        return view('employee.application.absence.create')->with(['employee' => $selected_employee]);
    }
    
    public function store(AbsenceApplicationRequest $request, AbsenceApplication $absence_application, AbsenceShift $absence_shift)
    {
        $absence_application->employee_id = Auth::guard('employees')->id();
        $absence_application_id = $absence_application->max('id') + 1;
        $absence_application->id = $absence_application_id;
        $absence_application->save();
        
        $input = $request['absence_shift'];
        $absence_shift->absence_application_id = $absence_application->id;
        $absence_shift_id = $absence_shift->max('id') + 1;
        $absence_shift->id = $absence_shift_id;
        $absence_shift->fill($input)->save();
        
        $absence_accept = new AbsenceAccept();
        $absence_accept->absence_application_id = $absence_application->id;
        $absence_accept_id = $absence_accept->max('id') + 1;
        $absence_accept->id = $absence_accept_id;
        $absence_accept->comment = "";
        $absence_accept->save();
        
        return redirect('/employee/application/{$shift_application->employee_id}');
    }
}
