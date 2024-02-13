<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\LoginController;
use App\Http\Controllers\Employee\HomeController;
use App\Http\Controllers\Employee\SettingController;
use App\Http\Controllers\Employee\ShiftApplicationController;
use App\Http\Controllers\Employee\AbsenceApplicationController;

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

//シフト申請
Route::prefix('employee')->group(function () {
    Route::get('/application/shift/create', [ShiftApplicationController::class, 'create']);
    Route::post('/application/shift', [ShiftApplicationController::class, 'store']);
    Route::get('/application/shift/index/{employee}', [ShiftApplicationController::class, 'index']);
    Route::get('/application/{shift_application}', [ShiftApplicationController::class, 'show']);
});

//欠勤申請
Route::prefix('employee')->group(function () {
    Route::get('/application/absence/create', [AbsenceApplicationController::class, 'create']);
    Route::post('/application/absence', [AbsenceApplicationController::class, 'store']);
    Route::get('/application/absence/index/{employee}', [AbsenceApplicationController::class, 'index']);
});

//ユーザー情報
Route::prefix('employee')->group(function () {
    Route::get('/setting', [SettingController::class, 'index']);
    Route::get('/setting/edit', [SettingController::class, 'edit']);
    Route::put('/setting/{employee}', [SettingController::class, 'update']);
});