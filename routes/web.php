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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'employee'], function () {
    Route::get('index', 'EmployeeController@index')->name('employee.index');
    Route::get('create', 'EmployeeController@create')->name('employee.create');
    Route::post('store', 'EmployeeController@store')->name('employee.store');
    Route::get('show/{id}', 'EmployeeController@show')->name('employee.show');
  });
