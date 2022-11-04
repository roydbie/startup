<?php

use App\Models\Werkorder;
use App\Models\WerkorderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Visueel');
});

Route::prefix('werkorders')->group(function () {
    Route::get('/', function () {
        $werkorders = Werkorder::orderByDesc('aanmaak_timestamp')->transform(function ($item) {
            $item->status = WerkorderStatus::findStatus($item->status);
            return $item;
        });
        return Inertia::render('Werkorders/Alles', ['werkorders' => $werkorders]);
    });

    Route::get('/details/{id}', function ($id) {
        return Inertia::render('Werkorders/Details', ['werkorder' => Werkorder::find($id)]);
    });

    Route::get('/nieuw', function () {
        return Inertia::render('Werkorders/Nieuw');
    });

    Route::post('/nieuw', function (Request $request) {
        Werkorder::create($request->all());
        return redirect('/werkorders');
    });

    Route::delete('/{id}', function ($id) {
        Werkorder::destroy($id);
        return redirect('/werkorders');
    });
});

Route::get('/planning', function () {
    return Inertia::render('Planning');
});

Route::get('/instellingen', function () {
    return Inertia::render('Instellingen', ['werkorder_statussen' => WerkorderStatus::all()]);
});

Route::post('/werkorder_statussen', function (Request $request) {
    WerkorderStatus::create($request->all());
    return redirect('/instellingen');
});

Route::put('/werkorder_status/{id}', function ($id, Request $request) {
    WerkorderStatus::updateActief($id, $request->get('actief'));
    return redirect('/instellingen');
});


