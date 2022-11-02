<?php

use App\Models\Werkorder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Visueel');
});

Route::get('/werkorders', function () {
    return Inertia::render('Werkorders/Alles', ['werkorders' => Werkorder::orderByDesc('aanmaak_timestamp')]);
});

Route::get('/werkorders/details/{id}', function ($id) {
    return Inertia::render('Werkorders/Details', ['werkorder' => Werkorder::find($id)]);
});

Route::get('/werkorders/nieuw', function () {
    return Inertia::render('Werkorders/Nieuw');
});

Route::post('/werkorders/nieuw', function (Request $request) {
    Werkorder::create($request->all());
    return redirect('/werkorders');
});

Route::delete('/werkorders/{id}', function ($id) {
    Werkorder::destroy($id);
    return redirect('/werkorders');
});

Route::get('/planning', function () {
    return Inertia::render('Planning');
});


