<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AbsenceApplication;
use App\Models\AbsenceShift;
use App\Models\AbsenceAccept;


class AbsenceApplicationController extends Controller
{
    public function create()
    {
        $selected_employee = Auth::guard('employees')->user();
        return view('employee.application.absence.create')->with(['employee' => $selected_employee]);;
    }
    
    public function store(Request $request, AbsenceApplication $absence_application, AbsenceShift $absence_shift)
    {
        $absence_application->employee_id = Auth::guard('employees')->id();
        $absence_application->save();
        
        $input = $request['absence_shift'];
        $absence_shift->absence_application_id = $absence_application->id;
        $absence_shift->fill($input)->save();
        
        $absence_accept = new AbsenceAccept();
        $absence_accept->absence_application_id = $absence_application->id;
        $absence_accept->comment = "";
        $absence_accept->save();
        
        return redirect('/employee/application/{$shift_application->employee_id}');
    }
}
