<?php

use App\Http\Controllers\Backend\BrandController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\DatabaseBackupController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', function () {
        return redirect()->route('admin.login');
    });

   Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
   Route::post('login', [LoginController::class, 'login'])->name('login');

   Route::get('home', [HomeController::class, 'index'])->name('home');

});


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

Route::get('home', [HomeController::class, 'index'])->name('home');
    
    Route::resources([
        'users'             =>                      UserController::class,
        'customers'         =>                      UserController::class,
        'categories'        =>                      CategoryController::class,
        'subcategories'      =>                     SubCategoryController::class,
        'brands'            =>                      BrandController::class,
    ]);

    Route::group(['prefix' => 'user-access'], function () {

        Route::get('db-backup',                     [DatabaseBackupController::class, 'db_backup'])->name('db-backup.index');
        
    });

});