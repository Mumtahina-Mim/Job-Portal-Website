<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\AuthorController;
use App\Http\Controllers\CompanyCategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\savedJobController;
use Illuminate\Support\Facades\Route;

//public routes
Route::get('employer/{employer}', [AuthorController::class, 'employer'])->name('account.employer');



//auth routes
Route::middleware('auth')->prefix('account')->group(function () {
 

  //Admin Role Routes
  Route::group(['middleware' => ['role:admin']], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('account.dashboard');
    Route::get('view-all-users', [AdminController::class, 'viewAllUsers'])->name('account.viewAllUsers');
    Route::delete('view-all-users', [AdminController::class, 'destroyUser'])->name('account.destroyUser');

    Route::get('category/{category}/edit', [CompanyCategoryController::class, 'edit'])->name('category.edit');
    Route::post('category', [CompanyCategoryController::class, 'store'])->name('category.store');
    Route::put('category/{id}', [CompanyCategoryController::class, 'update'])->name('category.update');
    Route::delete('category/{id}', [CompanyCategoryController::class, 'destroy'])->name('category.destroy');
  });

  //Author Role Routes
  Route::group(['middleware' => ['role:author']], function () {
    Route::get('author-section', [AuthorController::class, 'authorSection'])->name('account.authorSection');

    Route::get('company/create', [CompanyController::class, 'create'])->name('company.create');
    Route::put('company/{id}', [CompanyController::class, 'update'])->name('company.update');
    Route::post('company', [CompanyController::class, 'store'])->name('company.store');
    Route::get('company/edit', [CompanyController::class, 'edit'])->name('company.edit');
    Route::delete('company', [CompanyController::class, 'destroy'])->name('company.destroy');
  });
});
