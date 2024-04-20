<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\StatusUpdateController;
use App\Http\Controllers\Backend\DatabaseBackupController;
use App\Http\Controllers\Backend\ReportController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', function () {
        return redirect()->route('admin.login');
    });

   Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
   Route::post('login',[LoginController::class, 'login'])->name('login');

   Route::get('home', [HomeController::class, 'index'])->name('home');

});


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

Route::get('home', [HomeController::class, 'index'])->name('home');
    
    Route::resources([
        'categories'        =>                CategoryController::class,
        'subcategories'     =>                SubCategoryController::class,
        'brands'            =>                BrandController::class,
        'products'          =>                ProductController::class,
        'banners'           =>                BannerController::class,
        'orders'            =>                OrderController::class,
        'customers'         =>                CustomerController::class,
    ]);
    Route::get('pending-orders',              [OrderController::class, 'pending'])->name('orders.pending');
    Route::post('status-update',              [StatusUpdateController::class, 'update'])->name('status-update');
    Route::post('order-process/{id}',         [StatusUpdateController::class, 'orderUpdate'])->name('order-process');

    Route::get('financial',               [ReportController::class, 'financialReport'])->name('financial-report.index');
});