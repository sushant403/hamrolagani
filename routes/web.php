<?php

use Illuminate\Support\Facades\Route;

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', [App\Http\Controllers\RoutesController::class, 'index']);
