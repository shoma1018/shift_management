<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\AbsenceApplication;
use App\Models\AbsenceShift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsenceApplicationController extends Controller
{
    public function index(AbsenceApplication $absence_application, AbsenceShift $absence_shift)
    {
        $selected_employee_id = Auth::guard('employees')->id();
        $selected_absence_applications = $absence_application->where('employee_id', $selected_employee_id)->get();
        $selected_absence_application_ids = $selected_absence_applications->pluck('id')->toArray();
        //dd($selected_absence_application);
        
        $selected_absence_shifts = $absence_shift->whereIn('absence_application_id', $selected_absence_application_ids)->get();
        return view('employee.application.absence.index')->with(['absence_applications' => $selected_absence_applications, 'absence_shifts' => $selected_absence_shifts]);
    }
    
     public function create()
    {
        return view('employee.application.absence.create');
    }
    
    public function store(Request $request, AbsenceApplication $absence_application, AbsenceShift $absence_shift)
    {
        $absence_application->employee_id = Auth::guard('employees')->id();
        $absence_application->save();
        
        $input = $request['absence_shift'];
        $absence_shift->absence_application_id = $absence_application->id;
        $absence_shift->fill($input)->save();
        
        return redirect('/employee/application/absence/index/{$shift_application->employee_id}');
    }
}
