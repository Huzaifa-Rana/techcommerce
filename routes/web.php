<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.web_pages.home');
})->name('home');

Route::get('/about', function () {
    return view('layouts.web_pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('layouts.web_pages.contact');
})->name('contact');

Route::get('/shop/cart', function () {
    return view('layouts.web_pages.cart');
})->name('cart');

Route::get('/shop/checkout', function () {
    return view('layouts.web_pages.checkout');
})->name('checkout');

Route::prefix('account')->group(function () {
    Route::get('/', function () {
        return view('layouts.web_pages.account');
    })->name('account');

    Route::get('/wishlist', function () {
        return view('layouts.web_pages.account_wishlist');
    })->name('account.wishlist');
});
