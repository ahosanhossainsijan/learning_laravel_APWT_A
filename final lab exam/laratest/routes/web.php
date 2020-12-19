<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LogoutController;
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

Route::resource('/login','App\Http\Controllers\LoginController');
Route::resource('/admin','App\Http\Controllers\AdminController');
Route::post('/admin/employee/{id}',[AdminController::class,'updateEmployee'])->name('admin.updateEmployee');

Route::resource('/employee','App\Http\Controllers\EmployeeController');
Route::resource('/logout','App\Http\Controllers\LogoutController');
