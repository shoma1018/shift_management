<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Shift\PostController;
use App\Http\Controllers\Admin\AcceptController;
use App\Http\Controllers\Employee\ApplicationController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ChangeEmailController;

//管理者ログイン
Route::prefix('admin')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('admin.login.index');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login.login');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.login.logout');
});

Route::prefix('admin')->middleware('auth:admins')->group(function(){
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('admin.dashboard');
});


//シフト投稿
Route::prefix('admin')->group(function () {
    Route::get('shift/post', [PostController::class, 'create']);  
    Route::post('/dashboard', [PostController::class, 'store']);  
});

//承認機能
Route::prefix('admin')->group(function () {
    Route::get('/accept', [AcceptController::class, 'index']);
    Route::put('/accept/shift/{shift_application}', [AcceptController::class, 'shiftAccept']);
    Route::put('/accept/absence/{absence_application}', [AcceptController::class, 'absenceAccept']);
    Route::get('/application/shift/{shift_application}', [ApplicationController::class, 'adminShow']);
});

//従業員情報
Route::prefix('admin')->group(function () {
    Route::get('/info', [EmployeeController::class, 'index']); 
    Route::get('/info/create', [EmployeeController::class, 'create']); 
    Route::post('/info', [EmployeeController::class, 'store']);
    Route::get('/info/{employee}/edit', [EmployeeController::class, 'edit']);
    Route::put('/info/{employee}', [EmployeeController::class, 'update']);
    Route::delete('/info/{employee}', [EmployeeController::class,'delete']);
});

//管理者情報
Route::prefix('admin')->group(function () {
    Route::get('/setting', [SettingController::class, 'index']);
    Route::get('/setting/edit', [SettingController::class, 'edit']);
    Route::put('/setting/{admin}', [SettingController::class, 'update']);
});

//メールアドレス変更
Route::prefix('admin')->middleware('auth:admins')->group(function () {
    Route::get('/setting/email', [ChangeEmailController::class, 'adminEdit']);
    Route::put('/setting/email/change', [ChangeEmailController::class, 'adminChangeEmail']);
});

//パスワード変更
Route::prefix('admin')->middleware('auth:admins')->group(function () {
    Route::get('/setting/password', [ChangePasswordController::class, 'adminEdit']);
    Route::put('/setting/password/change', [ChangePasswordController::class, 'adminChangePassword']);
});