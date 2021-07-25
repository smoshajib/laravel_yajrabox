<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;

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


// yajrabox html builder using
Route::resource('data',UserController::class);
// yajrabox html builder using

// Route::resource('user', App\Http\Controllers\UserController::class);

// user data
Route::get('/',[TestController::class,'index']);
Route::get('/users',[TestController::class,'getUser'])->name('get.user');
// user data


