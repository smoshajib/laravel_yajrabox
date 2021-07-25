<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;

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
Route::resource('users',UsersController::class);
Route::get('/data',[UserController::class,'index']);
// yajrabox html builder using

// Route::resource('user', App\Http\Controllers\UserController::class);

// user data
Route::get('/',[TestController::class,'index']);
Route::get('/user',[TestController::class,'getUser'])->name('get.user');
// user data


