<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//管理者・従業員のファイル呼び出し
include __DIR__ . '/admin.php';
include __DIR__ . '/employee.php';

//フロント
Route::get('/', [HomeController::class, 'top'])->name('top');




