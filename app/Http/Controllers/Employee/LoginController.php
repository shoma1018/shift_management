<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //ログインページの表示
    public function index()
    {
        if (Auth::guard('employees')->user()) {
            return redirect()->route('employee.dashboard');
        }
        
        return view('employee.login.index');
    }
    
    //ログイン処理
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        //ログインに成功したときの処理
        if (Auth::guard('employees')->attempt($credentials)) {
            return redirect()->route('employee.dashboard')->with(['login_msg' => 'ログインしました。']);
        }
        //ログインに失敗したときの処理
        return back()->withErrors(['login' => ['ログインに失敗しました']]);
    }
    
    public function logout(Request $request)
    {
        Auth::guard('employees')->logout();
        $request->session()->regenerateToken();
        
        //ログインページにリダイレクト
        return redirect()->route('employee.login.index')->with(['logout_msg' => 'ログアウトしました']);
    }
}

