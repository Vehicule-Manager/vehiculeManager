<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function subjectStore(Request $request)
    {
        return response()->json();
    }
    public function subjectIndex()
    {
        $subject = Subject::all();
        return response()->json($subject);
    }
    public function subjectShow($id)
    {
        $subject = DB::table('subjects')->select('name')->where('id', '=', $id)->get();
        return response()->json();
    }
    public function subjectUpdate($id, Request $request)
    {
        return response()->json();
    }
    public function subjectDestroy($id)
    {
        $subject = DB::table('subjects')->where('id', '=', $id)->delete();
        return response()->json($subject);
    }
}
