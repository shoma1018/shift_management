<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\LoginController;
use App\Http\Controllers\Employee\HomeController;

Route::prefix('employee')->group(function() {
    Route::get('login', [LoginController::class, 'index'])->name('employee.login.index');
    Route::post('login', [LoginController::class, 'login'])->name('employee.login.login');
    Route::get('logout', [LoginController::class, 'logout'])->name('employee.login.logout');
    
    Route::get('/', [HomeController::class, 'dashboard'])->name('employee.dashboard');
});

Route::prefix('employee')->middleware('auth.employees:employees')->group(function(){
    Route::get('/', [HomeController::class, 'dashboard'])->name('employee.dashboard');
});