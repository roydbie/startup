<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Visueel');
});

Route::get('/werkorders', function () {
    return Inertia::render('Werkorders');
});


Route::get('/planning', function () {
    return Inertia::render('Planning');
});


