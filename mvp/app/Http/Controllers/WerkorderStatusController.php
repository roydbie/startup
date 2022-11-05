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
        DB::table('werkorder_statussen')->where('id', '=', $id)->update(['actief' => $request->get('actief')]);
        return redirect('/instellingen');
    }

    public static function delete($id)
    {
        WerkorderStatus::destroy($id);
        return redirect('/instellingen');
    }

}
