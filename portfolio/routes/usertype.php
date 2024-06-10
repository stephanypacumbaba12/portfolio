<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/login_validate', [LoginController::class,'login_validate'])->name('login_validate');
Route::get('/register', [LoginController::class,'register'])->name('register');
Route::post('/register_validate', [LoginController::class,'register_validate'])->name('register_validate');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::get('/dashboard', [LoginController::class,'dashboard'])->name('dashboard');
Route::get('/background', [LoginController::class,'background'])->name('background');