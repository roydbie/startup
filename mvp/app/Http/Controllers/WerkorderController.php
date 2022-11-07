<?php

namespace App\Http\Controllers;

use App\Models\Werkorder;
use App\Models\WerkorderStatus;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WerkorderController extends Controller
{

    public static function index()
    {
        $werkorders = Werkorder::orderByDesc('aanmaak_timestamp')->transform(function ($item) {
            if (WerkorderStatus::find($item->status) === null){
                $item->status = 'Status verwijderd';
            } else {
                $item->status = WerkorderStatus::find($item->status)->status;
            }

            return $item;
        });
        return Inertia::render('Werkorders/Alles', ['werkorders' => $werkorders]);
    }

    public static function details($id)
    {
        return Inertia::render('Werkorders/Details', ['werkorder' => Werkorder::find($id)]);
    }

    public static function createPage()
    {
        return Inertia::render('Werkorders/Nieuw');
    }

    public static function create(Request $request)
    {
        Werkorder::create($request->all());
        return redirect('/werkorders');
    }

    public static function delete($id)
    {
        Werkorder::destroy($id);
        return redirect('/werkorders');
    }
}
