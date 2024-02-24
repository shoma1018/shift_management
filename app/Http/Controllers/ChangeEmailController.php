<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use Illuminate\Support\Facades\Auth;

class ChangeEmailController extends Controller
{
    public function adminEdit()
    {
        return view('admin.setting.email');
    }
    
     public function adminChangeEmail(EmailRequest $request) 
    {
        //現在のメールアドレスが正しいかを調べる
        if (!($request['current_email'] === Auth::guard('admins')->user()->email))
        {
            return back()->withInput()->with(['error' => '現在のメールアドレスが間違っています']);
        }
        
        //現在のメールアドレスと新しいメールアドレスが同じかを調べる
        if ($request['current_email'] === $request['new_email']) 
        {
            return back()->withInput()->with(['error' => '新しいメールアドレスが現在のメールアドレスと同じです']);
        }
        
        //新しいメールアドレスの誤入力をチェックする
        if(!($request['new_email'] === $request['confirm_email']))
        {
            return back()->withInput()->with(['error' => '新しいメールアドレスと確認用のメールアドレスが一致しません']);
        }
    
        //メールアドレスを変更
        $admin = Auth::guard('admins')->user();
        $admin->email = $request['new_email'];
        $admin->save();
        
        //管理者情報を取得する
        $selected_admin = Auth::guard('admins')->user();
    
        return redirect('/admin/setting');
    }
}
