<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    public function typeStore(Request $request)
    {
        return response()->json();
    }

    public function typeIndex()
    {
        $type = Type::all();
        return response()->json($type);
    }

    public function typeShow($id)
    {
        $type = DB::table('types')->select('name')->where('id','=', $id)->get();
        return response()->json($type);
    }

    public function typeUpdate($id, Request $request)
    {
        return response()->json();
    }

    public function typeDestroy($id)
    {
        $type = DB::table('types')->where('id','=',$id)->delete();
        return response()->json($type);
    }
}
