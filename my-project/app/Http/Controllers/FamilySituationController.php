<?php

namespace App\Http\Controllers;

use App\Models\FamilySituation;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FamilySituationController extends Controller
{
    public function familySituationStore(Request $request)
    {
        return response()->json();
    }

    public function familySituationIndex()
    {
        $familySituation = familySituation::all();
        return response()->json($familySituation);
    }

    public function familySituationShow($id)
    {
        $familySituation = DB::table('family_situations')->select('name','numberOfChild')->where('id', '=', $id)->get();
        return response()->json($familySituation);
    }

    public function familySituationUpdate($id, Request $request)
    {
        return response()->json();
    }

    public function familySituationDestroy($id)
    {
        $familySituation = DB::table('family_situations')->where('id', '=', $id)->delete();
        return response()->json($familySituation);
    }
}
