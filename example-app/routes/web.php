<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $name = "Gui";

    return view('welcome', ['name' => $name]);
});

Route::get('/contact', function () {
    return view('contacts');
});

Route::get('/product', function () {
    return view('product');
});