<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/hello', function () {
    return Inertia::render('Hello');
});

Route::get('/', function () {
    return Inertia::render('Home');
});
