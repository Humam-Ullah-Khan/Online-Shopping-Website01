<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/checkout-page', function () {
    return view('checkout.create');
});

Route::get('/master', function () {
    return view('layouts.master');
});
