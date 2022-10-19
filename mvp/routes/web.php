<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Visual');
});

Route::get('/workorders', function () {
    return Inertia::render('Workorders');
});


Route::get('/planning', function () {
    return Inertia::render('Planning');
});


