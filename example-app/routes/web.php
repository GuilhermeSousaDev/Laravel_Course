<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $arr = [10, 20, 30, 40, 50, 60];
    $names = ['Pedro', 'Carlos', 'Guilherme'];

    return view(
        'welcome', 
        [
            'arr' => $arr,
            'names' => $names,
        ],
    );
});

Route::get('/contact/{id}', function ($id) {
    return view('contacts', ['id'=>$id]);
});

Route::get('/product', function () {
    return view('product');
});

Route::redirect('/about', '/contact');
Route::view('/contact', 'contacts');