<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/product/{id}', [Controller::class, 'product']);

Route::redirect('/about', '/contact');
Route::view('/contact', 'contacts');