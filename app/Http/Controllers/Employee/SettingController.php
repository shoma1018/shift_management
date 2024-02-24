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
}
