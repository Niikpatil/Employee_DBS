<?php

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


    // Route::get('/welcome', function () {
    //     return view('common.welcome');
    // });

    // Route::get('/home', function () {
    //     return view('layouts.app');
    // });

    // Route::get('/admin', function () {
    //     return view('admin.index');
    // });

    Route::get('/', function() {
        return view('dashboard.index');
    })->middleware('auth');



    Route::resource('/employee', 'EmployeesController')->middleware('auth');


    // For Department
    Route::resource('/admin', 'AdminsController')->middleware('auth');;
    Route::resource('/department', 'DepartmentsController');
    Route::resource('/salaries', 'SalariesController');
    Route::resource('/cities', 'CitiesController');
    Route::resource('/states', 'StatesController');
    Route::resource('/countries', 'CountriesController');



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
