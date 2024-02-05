<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index(Admin $admin)
    {
        $adminId = Auth::id();
        $selected_admin = Auth::guard('admins')->user();
        return view('admin.setting.index')->with(['admin' => $selected_admin]);
    }
}
