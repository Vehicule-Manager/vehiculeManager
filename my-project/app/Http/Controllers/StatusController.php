<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatusController extends Controller
{
    public function statusStore(Request $request)
    {
        return response()->json();
    }

    public function statusIndex()
    {
        $status = Status::all();
        return response()->json($status);
    }

    public function statusShow($id)
    {
        $status = DB::table('Statuses')->select('name')->where('id', '=', $id)->get();
        return response()->json($status);
    }

    public function statusUpdate($id, Request $request)
    {
        return response()->json();
    }

    public function statusDestroy($id)
    {
        $status = DB::table('Statuses')->where('id','=',$id)->delete();
        return response()->json($status);
    }
}
