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
Route::get('/',[App\Http\Controllers\HomeController::class, 'JobController']);


//jobs
Route::get('/',[App\Http\Controllers\JobController::class, 'JobController']);
Route::get('/jobs/create',[App\Http\Controllers\JobController::class, 'JobController'])->name('job.create');
Route::post('/jobs/create',[App\Http\Controllers\JobController::class, 'JobController'])->name('job.store');
Route::get('/jobs/{id}/edit',[App\Http\Controllers\JobController::class, 'JobController'])->name('job.edit');
Route::post('/jobs/{id}/edit',[App\Http\Controllers\JobController::class, 'JobController'])->name('job.update');
Route::get('/jobs/my-job',[App\Http\Controllers\JobController::class, 'JobController'])->name('my.job');

Route::get('/jobs/applications',[App\Http\Controllers\JobController::class, 'JobController'])->name('applicant');
Route::get('/jobs/alljobs',[App\Http\Controllers\JobController::class, 'JobController'])->name('alljobs');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//company
Route::get('/companies','CompanyController@company')->name('company');