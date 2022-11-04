<?php

use App\Http\Controllers\WerkorderController;
use App\Http\Controllers\WerkorderStatusController;
use App\Models\Werkorder;
use App\Models\WerkorderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Visueel');
});

Route::prefix('werkorders')->group(function () {
    Route::get('/', [WerkorderController::class, 'index']);
    Route::get('/details/{id}', [WerkorderController::class, 'details']);
    Route::get('/nieuw', [WerkorderController::class, 'createPage']);
    Route::post('/nieuw', [WerkorderController::class, 'create']);
    Route::delete('/{id}', [WerkorderController::class, 'delete']);
});

Route::get('/planning', function () {
    return Inertia::render('Planning');
});

Route::get('/instellingen', function () {
    return Inertia::render('Instellingen', ['werkorder_statussen' => WerkorderStatus::all()]);
});

Route::post('/werkorder_statussen', [WerkorderStatusController::class, 'index']);
Route::put('/werkorder_statussen/{id}', [WerkorderStatusController::class, 'update']);


