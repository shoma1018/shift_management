<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\LoginController;
use App\Http\Controllers\Employee\HomeController;
use App\Http\Controllers\Employee\SettingController;
use App\Http\Controllers\Employee\ApplicationController;
use App\Http\Controllers\Employee\ShiftApplicationController;
use App\Http\Controllers\Employee\AbsenceApplicationController;
use App\Http\Controllers\ChangePasswordController;

//従業員ログイン
Route::prefix('employee')->group(function() {
    Route::get('login', [LoginController::class, 'index'])->name('employee.login.index');
    Route::post('login', [LoginController::class, 'login'])->name('employee.login.login');
    Route::get('logout', [LoginController::class, 'logout'])->name('employee.login.logout');
});

//ダッシュボードの表示
Route::prefix('employee')->middleware('auth.employees:employees')->group(function(){
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('employee.dashboard');
});


//シフト申請
Route::prefix('employee')->group(function () {
    Route::get('/application/shift/create', [ShiftApplicationController::class, 'create']);
    Route::post('/application/shift', [ShiftApplicationController::class, 'store']);
});

//欠勤申請
Route::prefix('employee')->group(function () {
    Route::get('/application/absence/create', [AbsenceApplicationController::class, 'create']);
    Route::post('/application/absence', [AbsenceApplicationController::class, 'store']);
});

//申請履歴
Route::prefix('employee')->group(function () {
    Route::get('/application/{employee}', [ApplicationController::class, 'index']);
    Route::get('/application/shift/{shift_application}', [ApplicationController::class, 'employeeShow']);
});

//ユーザー情報
Route::prefix('employee')->group(function () {
    Route::get('/setting', [SettingController::class, 'index']);
    Route::get('/setting/edit', [SettingController::class, 'edit']);
    Route::put('/setting/{employee}', [SettingController::class, 'update']);
});

//パスワード変更
Route::prefix('employee')->middleware('auth:employees')->group(function () {
    Route::get('/setting/password', [ChangePasswordController::class, 'employeeEdit']);
    Route::put('/setting/password/change', [ChangePasswordController::class, 'employeeChangePassword']);
});