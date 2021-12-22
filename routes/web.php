<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'Admin' ,'middleware'=>['admin','auth'] ,'namespace'=>'admin'],function(){
    Route::get('dashborad',[AdminController::class,'Index'])->name('admin.dashboard');
});
Route::group(['prefix'=>'User' ,'middleware'=>['user','auth'] ,'namespace'=>'user'],function(){
    Route::get('dashborad',[UserController::class,'Index'])->name('user.dashboard');
});

