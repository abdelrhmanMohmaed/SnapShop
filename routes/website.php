<?php

use Illuminate\Support\Facades\Route;

Route::view('/home', 'website.pages.home.index');
Route::view('/checkout', 'website.pages.checkout.checkout');
Route::view('/blog-details', 'website.pages.blog-details.blog-details');
Route::view('/blog', 'website.pages.blog.blog');
Route::view('/contact', 'website.pages.contact.contact');
Route::view('/shop-details', 'website.pages.shop-details.shop-details');
Route::view('/shop-grid', 'website.pages.shop-grid.shop-grid');
Route::view('/shoping-cart', 'website.pages.shoping-cart.shoping-cart');
