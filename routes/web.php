<?php

use App\Http\Controllers\UserController;
use illuminate\Support\Facades\auth;
Use illuminate\support\Facades\Route;

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

// Auth::routes();

// Route::get('/home', HomeController@index');

route::get('/user', [UserController::class, 'index'])->name('user');

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/user/create/read', [UserController::class, 'read'])->name('user.create.read');
Route::get('/user/create/read/update', [UserController::class, 'update'])->name('user.create.read.update');
Route::get('/user/create/read/update/delete', [UserController::class, 'delete'])->name('user.create.read.update/delete');