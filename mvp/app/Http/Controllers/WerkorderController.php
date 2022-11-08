<?php

namespace App\Http\Controllers;

use App\Models\Werkorder;
use App\Models\WerkorderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class WerkorderController extends Controller
{

    public static function index()
    {
        $werkorders = Werkorder::orderBy('aanmaak_timestamp', 'desc')->get()->transform(function ($item) {
            $item->status = WerkorderStatus::find($item->status)->status;
            return $item;
        });
        return Inertia::render('Werkorders/Alles', ['werkorders' => $werkorders]);
    }

    public static function details($id)
    {
        $werkorder = Werkorder::find($id);
        $werkorder->status = WerkorderStatus::find($werkorder->status)->status;
        return Inertia::render('Werkorders/Details', ['werkorder' => $werkorder]);
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

    public static function update($id, Request $request)
    {
        Werkorder::find($id)->update([
            'geschatte_tijdsduur' => $request->get('geschatte_tijdsduur'),
            'planning_datum' => $request->get('planning_datum'),
            'planning_tijd' => $request->get('planning_tijd'),
            'deadline_datum' => $request->get('deadline_datum'),
            'deadline_tijd' => $request->get('deadline_tijd'),
        ]);
        return redirect("werkorders/details/{$id}");
    }

    public static function delete($id)
    {
        Werkorder::destroy($id);
        return redirect('/werkorders');
    }
}
