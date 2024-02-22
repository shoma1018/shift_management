<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shift;
use Datetime;

class HomeController extends Controller
{
    
    public function dashboard(Request $request, Shift $shift)
    {
        $search = $request['date'];
       
        if ($search == null)
        {
            $datetime = new Datetime();
            $today = $datetime->format('y-m-d');
            $selected_shift = $shift->where('date', $today)->first();
            return view('admin.dashboard')->with(['shift' => $selected_shift]);
        }
        
        $selected_shift = $shift->where('date', $search)->first();
        
        return view('admin.dashboard')->with(['shift' => $selected_shift, 'search' => $search]);
    }
}
