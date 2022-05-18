<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('index');
});

// Login Route
Route::get('login',[LoginController::class,'__index'])->name('login');
Route::post('login',[LoginController::class,'__login'])->name('login.post');

Route::get('register',[RegisterController::class,'__index'])->name('register');
Route::post('register-success',[RegisterController::class,'__store'])->name('register.post');
Route::get('dashboard',[RegisterController::class,'__dashboard'])->name('dashboard');