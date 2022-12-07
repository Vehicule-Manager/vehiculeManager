<?php

namespace App\Http\Controllers;

use App\Models\ProfessionnalSituation;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfessionnalSituationController extends Controller
{
    public function ProfessionnalSituationStore(Request $request)
    {
        return response()->json();
    }

    public function ProfessionnalSituationIndex()
    {
        $ProfessionnalSituation = ProfessionnalSituation::all();
        return response()->json($ProfessionnalSituation);
    }

    public function ProfessionnalSituationShow($id)
    {
        $ProfessionnalSituation = DB::table('professionnal_situations')->select('name')->where('id', '=', $id)->get();
        return response()->json($ProfessionnalSituation);
    }

    public function ProfessionnalSituationUpdate($id, Request $request)
    {
        return response()->json();
    }

    public function ProfessionnalSituationDestroy($id)
    {
        $ProfessionnalSituation = DB::table('professionnal_situations')->where('id', '=', $id)->delete();
        return response()->json($ProfessionnalSituation);
    }
}
