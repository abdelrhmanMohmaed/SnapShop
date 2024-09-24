<?php

use App\Http\Controllers\Website\Auth\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Website Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Name = website.
*/

Route::prefix('home')->name('home.')->group(function () {
    
    Route::view('', 'website.pages.home.index')->name('index');


    Route::view('shopping-cart', 'website.pages.shopping-cart.index')->name('shopping-cart');
    Route::view('checkout', 'website.pages.checkout.index')->name('checkout');
    Route::view('contact', 'website.pages.contact.index')->name('contact-us');

    
    Route::prefix('shop')->name('shop.')->group(function () {

        Route::view('', 'website.pages.shop.index')->name('index');
        Route::view('shop-details', 'website.pages.shop.show')->name('show');
    });
    
    Route::prefix('blog')->name('blog.')->group(function () {

        Route::view('', 'website.pages.blog.index')->name('index');
        Route::view('blog-details', 'website.pages.blog.show')->name('show');
    });


    Route::prefix('login')->name('login.')->group(function () {
    
        Route::view('', 'website.pages.auth.login')->name('index');
        Route::post('',[LoginController::class,'login'])->name('login');
    });

    Route::prefix('register')->name('register.')->group(function () {
    
        Route::view('', 'website.pages.auth.register')->name('index');
        // Route::post('',[LoginController::class,'login'])->name('login');
    });
});





