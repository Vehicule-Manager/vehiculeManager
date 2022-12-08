<?php

namespace App\Http\Controllers;

use App\Models\GearBoxe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GearBoxeController extends Controller
{
    public function gearBoxeStore(Request $request)
    {
        return response()->json();
    }

    public function gearBoxeIndex()
    {
        $gearBoxe = GearBoxe::all();
        return response()->json($gearBoxe);
    }

    public function gearBoxeShow($id)
    {
        $gearBoxe = DB::table('gear_boxes')->select('name')->where('id', '=', $id)->get();
        return response()->json($gearBoxe);
    }

    public function gearBoxeUpdate($id, Request $request)
    {
        return response()->json();
    }

    public function gearBoxeDestroy($id)
    {
        $gearBoxe = DB::table('gear_boxes')->where('id','=',$id)->delete();
        return response()->json($gearBoxe);
    }
}
