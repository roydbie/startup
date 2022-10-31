<?php

use App\Models\Werkorder;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Visueel');
});

Route::get('/werkorders', function () {
    return Inertia::render('Werkorders/Alles', ['werkorders' => Werkorder::all()]);
});

Route::get('/werkorders/{id}', function ($id) {
    return Inertia::render('Werkorders/Details', ['id' => $id]);
});

Route::get('/planning', function () {
    return Inertia::render('Planning');
});


