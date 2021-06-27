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
    Route::get('edit/{id}', 'EmployeeController@edit')->name('employee.edit');
    Route::post('update/{id}', 'EmployeeController@update')->name('employee.update');
    Route::post('destroy/{id}', 'EmployeeController@destroy')->name('employee.destroy');
  });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
