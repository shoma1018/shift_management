<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ChangePasswordController extends Controller
{
    public function adminEdit()
    {
        return view('admin.setting.password');
    }
    
    public function employeeEdit()
    {
        $selected_employee = Auth::guard('employees')->user();
        return view('employee.setting.password')->with(['employee' => $selected_employee]);
    }
    
    public function adminChangePassword(PasswordRequest $request) 
    {
        //現在のパスワードが正しいかを調べる
        if (!(Hash::check($request['current_password'], Auth::guard('admins')->user()->password))) 
        {
            return back()->withInput()->with(['error' => '現在のパスワードが間違っています']);
        }
        
        //現在のパスワードと新しいパスワードが正しいかを調べる
        if ($request['current_password'] === $request['new_password']) 
        {
            return back()->withInput()->with(['error' => '新しいパスワードが現在のパスワードと同じです']);
        }
        
        //新しいパスワードの誤入力をチェックする
        if(!($request['new_password'] === $request['confirm_password']))
        {
            return back()->withInput()->with(['error' => '新しいパスワードと確認用のパスワードが一致しません']);
        }
    
        //パスワードを変更
        $admin = Auth::guard('admins')->user();
        $admin->password = Hash::make($request['new_password']);
        $admin->save();
    
        return back()->withInput()->with('message', 'パスワードを変更しました');
    }
    
    public function employeeChangePassword(PasswordRequest $request) 
    {
        //現在のパスワードが正しいかを調べる
        if (!(Hash::check($request['current_password'], Auth::guard('employees')->user()->password))) 
        {
            return back()->withInput()->with(['error' => '現在のパスワードが間違っています']);
        }
        
        //現在のパスワードと新しいパスワードが異なるかを調べる
        if ($request['current_password'] === $request['new_password']) 
        {
            return back()->withInput()->with(['error' => '新しいパスワードが現在のパスワードと同じです']);
        }
        
        if(!($request['new_password'] === $request['confirm_password']))
        {
            return back()->withInput()->with(['error' => '新しいパスワードと確認用のパスワードが一致しません']);
        }
    
        //パスワードを変更
        $admin = Auth::guard('employees')->user();
        $admin->password = Hash::make($request['new_password']);
        $admin->save();
    
        return back()->withInput()->with(['message' => 'パスワードを変更しました']);
    }
}
