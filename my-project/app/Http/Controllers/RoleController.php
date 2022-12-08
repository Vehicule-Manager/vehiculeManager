<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RoleController extends Controller
{
    public function roleStore(Request $request)
    {
        return response()->json();
    }

    public function roleIndex()
    {
        $role = Role::all();
        return response()->json($role);
    }

    public function roleShow($id)
    {
        $role = DB::table('roles')->select('name')->where('id', '=', $id)->get();
        return response()->json($role);
    }

    public function roleUpdate($id, Request $request)
    {
        return response()->json();
    }

    public function roleDestroy($id)
    {
        $role = DB::table('roles')->where('id', '=', $id)->delete();
        return response()->json($role);
    }
}
