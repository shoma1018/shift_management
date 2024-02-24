<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminInformationRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index()
    {
        $selected_admin = Auth::guard('admins')->user();
        return view('admin.setting.index')->with(['admin' => $selected_admin]);
    }
    
    public function edit()
    {
        $selected_admin = Auth::guard('admins')->user();
        return view('admin.setting.edit')->with(['admin' => $selected_admin]);
    }
    
    public function update(AdminInformationRequest $request, Admin $admin)
    {
        $input = $request['admin'];
        $admin->fill($input)->save();
        return redirect('/admin/setting');
    }
}
