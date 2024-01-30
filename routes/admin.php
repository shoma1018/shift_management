<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Shift\PostController;

//管理者ログイン
Route::prefix('admin')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('admin.login.index');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login.login');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.login.logout');
    Route::get('/', [HomeController::class, 'dashboard'])->name('admin.dashboard');
});

Route::prefix('admin')->middleware('auth:admins')->group(function(){
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('admin.dashboard');
});


//シフト投稿
Route::prefix('admin')->group(function () {
    Route::get('shift/post', [PostController::class, 'create']);  
    Route::post('/dashboard', [PostController::class, 'store']);  
});