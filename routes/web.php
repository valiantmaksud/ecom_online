<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Frontend\AjaxController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\CheckoutController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::match(['get', 'post'], 'login',          [AuthController::class,         'login'])->name('frontend.auth.login');
Route::match(['get', 'post'], 'register',       [AuthController::class,         'register'])->name('frontend.auth.register');
Route::post('logout',                           [AuthController::class,         'logout'])->name('frontend.auth.logout');


Route::get('/',                                 [FrontendController::class,      'index'])->name('frontend.index');
Route::get('search',                            [ProductController::class,      'search'])->name('frontend.search');
Route::get('product/{slug}',                    [ProductController::class,      'show'])->name('product.show');
Route::get('product-view',                      [ProductController::class,      'quickView'])->name('product-quick-view');



Route::group(['middleware' => 'user-auth'], function () {

    Route::get('cart',             [CartController::class, 'index'])->name('cart.index');
    Route::post('cart',            [CartController::class, 'store'])->name('cart.store');
    Route::patch('cart/{id}',      [CartController::class, 'update'])->name('cart.update');
    Route::delete('cart/{id}',     [CartController::class, 'destroy'])->name('cart.destroy');
    Route::get('checkout',         [CartController::class, 'checkout'])->name('cart.checkout');
    Route::post('checkout',        [CheckoutController::class, 'store'])->name('cart.checkout.store');

    Route::group(['prefix' => 'profile'], function () {
        Route::get('account',       [AuthController::class, 'account'])->name('frontend.profile.account');
        Route::post('update',       [AuthController::class, 'update'])->name('frontend.profile.update');
        Route::get('order',         [AuthController::class, 'order'])->name('frontend.profile.order');
        Route::get('review',        [AuthController::class, 'review'])->name('frontend.profile.review');
        Route::get('track-order',   [AuthController::class, 'trackOrder'])->name('frontend.profile.track-order');
        Route::get('wishlists',     [AuthController::class, 'wishlist'])->name('frontend.profile.wishlist');
        Route::get('order/{id}',    [AuthController::class, 'orderShow'])->name('frontend.profile.order.show');
    });


});

Route::post('newsletter-store',     [NewsletterController::class, 'store'])->name('newsletter.store');