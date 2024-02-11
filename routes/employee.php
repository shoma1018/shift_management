<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\LoginController;
use App\Http\Controllers\Employee\HomeController;
use App\Http\Controllers\Employee\SettingController;
use App\Http\Controllers\Employee\ShiftApplicationController;

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

//
Route::prefix('employee')->group(function () {
    Route::get('/application/shift/create', [ShiftApplicationController::class, 'create']);
    Route::post('/application', [ShiftApplicationController::class, 'store']);
    Route::get('/application/index/{employee}', [ShiftApplicationController::class, 'index']);
    Route::get('/application/{shift_application}', [ShiftApplicationController::class, 'show']);
});

//ユーザー情報
Route::prefix('employee')->group(function () {
    Route::get('/setting', [SettingController::class, 'index']);
    Route::get('/setting/edit', [SettingController::class, 'edit']);
    Route::put('/setting/{employee}', [SettingController::class, 'update']);
});