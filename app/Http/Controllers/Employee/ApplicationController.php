<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ShiftApplication;
use App\Models\ShiftPattern;
use App\Models\AbsenceApplication;
use App\Models\AbsenceShift;


class ApplicationController extends Controller
{
    public function index(ShiftApplication $shift_application, AbsenceApplication $absence_application, AbsenceShift $absence_shift)
    {
        $selected_employee = Auth::guard('employees')->user();
        
        //シフト申請の取得
        $selected_employee_id = Auth::guard('employees')->id();
        $selected_shift_applications = $shift_application->where('employee_id', $selected_employee_id)->get();
        
        //欠勤申請の取得
        $selected_employee_id = Auth::guard('employees')->id();
        $selected_absence_applications = $absence_application->where('employee_id', $selected_employee_id)->get();
        $selected_absence_application_ids = $selected_absence_applications->pluck('id')->toArray();
        $selected_absence_shifts = $absence_shift->whereIn('absence_application_id', $selected_absence_application_ids)->get();
        
        return view('employee.application.index')->with(['employee' => $selected_employee, 'shift_applications' => $selected_shift_applications, 'absence_applications' => $selected_absence_applications, 'absence_shifts' => $selected_absence_shifts]);
    }
    
    public function adminShow(ShiftApplication $shift_application, ShiftPattern $shift_pattern)
    {
        $selected_employee = Auth::guard('employees')->user();
        $selected_shift_application_id = $shift_application->id;
        $shift_patterns = $shift_pattern->where('shift_application_id', $selected_shift_application_id)->get();
        return view('admin.application.show')->with(['employee' => $selected_employee, 'shift_patterns' => $shift_patterns]);
    }
    
    
    public function employeeShow(ShiftApplication $shift_application, ShiftPattern $shift_pattern)
    {
        $selected_employee = Auth::guard('employees')->user();
        $selected_shift_application_id = $shift_application->id;
        $shift_patterns = $shift_pattern->where('shift_application_id', $selected_shift_application_id)->get();
        return view('employee.application.show')->with(['employee' => $selected_employee, 'shift_patterns' => $shift_patterns]);
    }
}