<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shift;
use Datetime;

class HomeController extends Controller
{
    public function dashboard(Request $request, Shift $shift)
    {
        $selected_employee = Auth::guard('employees')->user();
        $search = $request['date'];
       
        if ($search == null)
        {
            $datetime = new Datetime();
            $today = $datetime->format('y-m-d');
            $selected_shift = $shift->where('date', $today)->first();
            return view('employee.dashboard')->with(['employee' => $selected_employee, 'shift' => $selected_shift]);
        }
        
        $selected_shift = $shift->where('date', $search)->first();
        
        return view('employee.dashboard')->with(['employee' => $selected_employee, 'shift' => $selected_shift, 'search' => $search]);
    }

}
