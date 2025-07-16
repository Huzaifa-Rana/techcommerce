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
    Route::get('/orders', function () {
        return view('layouts.user_pannel.pages.account_orders');
    })->name('account.orders');

    Route::get('/wishlist', function () {
        return view('layouts.user_pannel.pages.account_wishlist');
    })->name('account.wishlist');

    Route::get('/payment', function () {
        return view('layouts.user_pannel.pages.account_payment');
    })->name('account.payment');

    Route::get('/info', function () {
        return view('layouts.user_pannel.pages.account_info');
    })->name('account.info');

    Route::get('/addresses', function () {
        return view('layouts.user_pannel.pages.account_addresses');
    })->name('account.addresses');
});

Route::prefix('account')->group(function () {
    Route::get('/orders', function () {
        return view('layouts.user_pannel.pages.account_orders');
    })->name('account.orders');

    Route::get('/wishlist', function () {
        return view('layouts.user_pannel.pages.account_wishlist');
    })->name('account.wishlist');

    Route::get('/payment', function () {
        return view('layouts.user_pannel.pages.account_payment');
    })->name('account.payment');

    Route::get('/info', function () {
        return view('layouts.user_pannel.pages.account_info');
    })->name('account.info');

    Route::get('/addresses', function () {
        return view('layouts.user_pannel.pages.account_addresses');
    })->name('account.addresses');
});
