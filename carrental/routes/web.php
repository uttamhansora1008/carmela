<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
    return view('admin.dashboard');
});

Route::get('/admin/login',[Authcontroller::class,'getlogin'])->name('getlogin');
Route::post('/admin=/login',[Authcontroller::class,'postLogin'])->name('postLogin');

Route::get('/admin/dashboard',[ProfileController::class,'dashboard'])->name('dashboard');

Route::get('/admin/users',[UserController::class,'index'])->name('users.index');

Route::get('/admin/logout',[ProfileController::class,'logout'])->name('logout');


// ----------------------------car add..................................................

Route::resource('products', ProductController::class);