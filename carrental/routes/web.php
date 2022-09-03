<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\ProfileController;
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
    return view('admin.login');
});

Route::get('/admin/login',[Authcontroller::class,'getlogin'])->name('getlogin');
Route::post('/admin/login',[Authcontroller::class,'postlogin'])->name('postlogin');

Route::get('/admin/dashboard',[ProfileController::class,'dashboard'])->name('dashboard');