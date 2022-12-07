<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculeController extends Controller
{
    public function vehiculeStore(Request $request)
    {
        return response()->json();
    }

    public function vehiculeIndex()
    {
        $vehicule = Vehicule::all();
        return response()->json($vehicule);
    }

    public function vehiculeShow($id)
    {
        $vehicule = DB::table('vehicules')->select('new','firstDateCicrulate','description','horsepower',
            'price','enterDate','leavingDate', 'immatriculation','id_statuses','id_clients','id_gear_boxes','id_brands',
            'id_energies','id_types')->where('id', '=', $id)->get();
        return response()->json($vehicule);
    }

    public function vehiculeUpdate($id, Request $request)
    {
        return response()->json();
    }

    public function vehiculeDestroy($id)
    {
        $vehicule = DB::table('vehicules')->where('id','=',$id)->delete();
        return response()->json($vehicule);
    }
}
