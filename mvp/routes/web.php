<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Visual');
});

Route::get('/workorders', function () {
    return Inertia::render('Workorders/All');
});

Route::get('/workorders/{id}', function ($id) {
    return Inertia::render('Workorders/Show', ['id' => $id]);
});

Route::get('/planning', function () {
    return Inertia::render('Planning');
});


