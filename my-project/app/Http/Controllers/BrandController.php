<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function brandStore(Request $request)
    {
        return response()->json();
    }

    public function brandIndex()
    {
        $brand = Brand::all();
        return response()->json($brand);
    }

    public function brandShow($id)
    {
        $brand = DB::table('brands')->select('name')->where('id', '=', $id)->get();
        return response()->json($brand);
    }

    public function brandUpdate($id, Request $request)
    {
        return response()->json();
    }

    public function brandDestroy($id)
    {
        $brand = DB::table('brands')->where('id','=',$id)->delete();
        return response()->json($brand);
    }
}
