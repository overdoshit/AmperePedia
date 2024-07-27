<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/checkout', function () {
    return view('checkout');
});
