<?php

use App\Models\Werkorder;
use App\Models\WerkorderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/aantalwerkorders', function () {
    return Werkorder::all()->count();
});

Route::get('/werkorder_statussen', function () {
    return WerkorderStatus::all()->where('actief', '=', '1');
});

Route::get('/werkorder_statussen/{id}', function ($id) {
    return WerkorderStatus::find($id);
});

