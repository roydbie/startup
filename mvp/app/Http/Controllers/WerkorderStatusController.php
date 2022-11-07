<?php

namespace App\Http\Controllers;

use App\Models\WerkorderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WerkorderStatusController extends Controller
{
    public static function index(Request $request)
    {
        WerkorderStatus::create($request->all());
        return redirect('/instellingen');
    }

    public static function update($id, Request $request)
    {
        DB::table('werkorder_statussen')->where('id', '=', $id)->update(['actief' => $request->get('actief'), 'in_visueel' => $request->get('in_visueel')]);
        return redirect('/instellingen');
    }

    public static function delete($id)
    {
        WerkorderStatus::find($id)->update(['verwijderd' => 1, 'actief' => 0, 'in_visueel' => 0]);
        return redirect('/instellingen');
    }

    public static function herstellen($id)
    {
        WerkorderStatus::find($id)->update(['verwijderd' => 0]);
        return redirect('/instellingen');
    }

}
