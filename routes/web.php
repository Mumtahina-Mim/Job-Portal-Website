<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/


Route::get('/', function () {
    return view('welcome');
});

/**
 * @brief
 * 
 *company
 */


/**
 * route a company using 'CompanyController'
 */
Route::get('/company/{id}/{company}','CompanyController@index')->name('company.index');


/**
 * view
 */
Route::get('company/create','CompanyController@create')->name('company.view');

/**
 * store
 */
Route::post('company/create','CompanyController@store')->name('company.store');

/**
 * details of company 
 */
Route::get('/companies','CompanyController@company')->name('company');
