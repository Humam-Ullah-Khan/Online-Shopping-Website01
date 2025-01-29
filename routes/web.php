<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', function () {
    return view('layouts.master');
});


Route::get('/checkout-page', function () {
    return view('checkout.create');
});

Route::get('/shop', function () {
    return view('shop-page.index');
});

Route::get('/product-detail-page', function () {
    return view('product-detail.index');
});

Route::get('/shopping-cart', function () {
    return view('shopping-cart.index');
});


Route::get('/sign-in', function () {
    return view('sign-in.index');
});

Route::get('/sign-up', function () {
    return view('sign-up.index');
});

Route::get('/error', function () {
    return view('error.index');
});
