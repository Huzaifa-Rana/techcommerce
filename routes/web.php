<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.web_pages.home');
});

Route::get('/about', function () {
    return view('layouts.web_pages.about');
});

Route::get('/contact', function () {
    return view('layouts.web_pages.contact');
});
