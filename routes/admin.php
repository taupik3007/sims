<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\QrController;

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
Route::get('/admin/list/class',[ClassController::class,'index']);
Route::get('/admin/create/class',[ClassController::class,'create']);
Route::post('/admin/create/class',[ClassController::class,'store']);
Route::get('/admin/create/user',[UserController::class, 'index']);
Route::post('/admin/create/user',[UserController::class, 'store']);
Route::get('/admin/download/{class}/qr',[QrController::class, 'index']);
