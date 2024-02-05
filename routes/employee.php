<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\LoginController;
use App\Http\Controllers\Employee\HomeController;
use App\Http\Controllers\Employee\SettingController;

//従業員ログイン
Route::prefix('employee')->group(function() {
    Route::get('login', [LoginController::class, 'index'])->name('employee.login.index');
    Route::post('login', [LoginController::class, 'login'])->name('employee.login.login');
    Route::get('logout', [LoginController::class, 'logout'])->name('employee.login.logout');
    
    Route::get('/', [HomeController::class, 'dashboard'])->name('employee.dashboard');
});

//ダッシュボードの表示
Route::prefix('employee')->middleware('auth.employees:employees')->group(function(){
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('employee.dashboard');
});

//ユーザー情報
Route::prefix('employee')->group(function () {
    Route::get('/setting', [SettingController::class, 'index']);
});