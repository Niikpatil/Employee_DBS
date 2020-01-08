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




    Route::get('/','DashboardController@index')->name('dashboard')->middleware('auth');



    Route::middleware(['auth'])->group(function () {

        // For Department
        Route::resource('/admin', 'AdminsController');
        Route::resource('/employee', 'EmployeesController');
        Route::resource('/department', 'DepartmentsController');
        Route::resource('/salaries', 'SalariesController');
        Route::resource('/cities', 'CitiesController');
        Route::resource('/states', 'StatesController');
        Route::resource('/countries', 'CountriesController');

    });


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
