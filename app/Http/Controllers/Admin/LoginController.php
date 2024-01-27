<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //ログインページの表示
    public function index()
    {
        if (Auth::guard('admins')->user()) {
            return redirect()->route('admin.dashboard');
        }
        
        return view('admin.login.index');
    }
    
    //ログイン処理
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        //ログインに成功したときの処理
        if (Auth::guard('admins')->attempt($credentials)) {
            return redirect()->route('admin.dashboard')->with(['login_msg' => 'ログインしました。']);
        }
        //ログインに失敗したときの処理
        return back()->withErrors(['login' => ['ログインに失敗しました']]);
    }
    
    public function logout(Request $request)
    {
        Auth::guard('admins')->logout();
        $request->session()->regenerateToken();
        
        //ログインページにリダイレクト
        return redirect()->route('admin.login.index')->with(['logout_msg' => 'ログアウトしました']);
    }
}
