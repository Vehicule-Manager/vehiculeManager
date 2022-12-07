<?php

namespace App\Http\Controllers;

use App\Models\CreditInfo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CreditInfoController extends Controller
{
    public function creditInfosStore(Request $request)
    {
        return response()->json();
    }

    public function creditInfosIndex()
    {
        $creditInfo = CreditInfo::all();
        return response()->json($creditInfo);
    }

    public function creditInfosShow($id)
    {
        $creditInfo = DB::table('credit_infos')->select('placeOfBirth', 'nationality', 'budgets', 'contract', 'contractDate', 'banquet', 'professionnalStatus', 'familysituation')->where('id', '=', $id)->get();
        return response()->json($creditInfo);
    }

    public function creditInfosUpdate($id, Request $request)
    {
        return response()->json();
    }

    public function creditInfosDestroy($id)
    {
        $creditInfo = DB::table('credit_infos')->where('id', '=', $id)->delete();
        return response()->json($creditInfo);
    }
}
