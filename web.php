<?php

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
    return view('welcome');
});

Route::get('studentinsert', 'App\Http\Controllers\studentcontroller@insertform');
Route::post('stformprocess', 'App\Http\Controllers\studentcontroller@formprocess');
Route::get('displaystdata', 'App\Http\Controllers\studentcontroller@displaydata');
Route::get('deletestudent/{id}', 'App\Http\Controllers\studentcontroller@deletedata');
Route::get('editstudent/{id}', 'App\Http\Controllers\studentcontroller@editdata');
Route::patch('updatestprocess', 'App\Http\Controllers\studentcontroller@updatedata');


Route::get('empinsert', 'App\Http\Controllers\employeecontroller@insertform');
Route::post('empformprocess', 'App\Http\Controllers\employeecontroller@formprocess');
Route::get('displayempdata', 'App\Http\Controllers\employeecontroller@displaydata');
Route::get('deleteemployee/{id}', 'App\Http\Controllers\employeecontroller@deletedata');
Route::get('editemployee/{id}', 'App\Http\Controllers\employeecontroller@editdata');
Route::patch('updateempprocess', 'App\Http\Controllers\employeecontroller@updatedata');
