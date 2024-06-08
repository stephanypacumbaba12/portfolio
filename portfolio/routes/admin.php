<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminAuth;


Route::middleware([AdminAuth::class])->group(function () {
    Route::get('/admin_login', [AdminController::class,'admin_login'])->name('admin_login');
    Route::post('/admin_validate', [AdminController::class,'admin_validate'])->name('admin_validate');
    Route::get('/admin_logout', [AdminController::class,'admin_logout'])->name('admin_logout');
    Route::get('/admin', [AdminController::class,'admin'])->name('admin');
});