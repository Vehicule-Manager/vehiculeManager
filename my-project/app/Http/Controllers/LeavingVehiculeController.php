<?php

namespace App\Http\Controllers;

use App\Models\LeavingVehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeavingVehiculeController extends Controller
{
    public function leavingVehiculeStore(Request $request)
    {
        return response()->json();
    }

    public function leavingVehiculeIndex()
    {
        $leavingVehicule = LeavingVehicule::all();
        return response()->json($leavingVehicule);
    }

    public function leavingVehiculeShow($id)
    {
        $leavingVehicule = DB::table('leaving_vehicules')->select('leavingDate','renderDate','contract','id_clients','id_vehicules')->where('id', '=', $id)->get();
        return response()->json($leavingVehicule);
    }

    public function leavingVehiculeUpdate($id, Request $request)
    {
        return response()->json();
    }

    public function leavingVehiculeDestroy($id)
    {
        $leavingVehicule = DB::table('leaving_vehicules')->where('id','=',$id)->delete();
        return response()->json($leavingVehicule);
    }
}
