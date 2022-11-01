<?php

use App\Models\Werkorder;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Visueel');
});

Route::get('/werkorders', function () {
    return Inertia::render('Werkorders/Alles', ['werkorders' => Werkorder::orderByDescTwice('aanmaak_datum', 'aanmaak_tijd')->toArray()]);
});

Route::get('/werkorders/{id}', function ($id) {
    return Inertia::render('Werkorders/Details', ['werkorder' => Werkorder::find($id)]);
});

Route::get('/planning', function () {
    return Inertia::render('Planning');
});


