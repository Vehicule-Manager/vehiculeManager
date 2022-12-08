<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function userStore(Request $request)
    {
        return response()->json();
    }

    // Récupérer toutes les informations relatives aux utilisateurs
    public function userIndex()
    {
        $user = user::all();
        return response()->json($user);
    }

    // Récupérer les informations d'un utilisateur
    public function userShow($id)
    {
        $user = DB::table('users')->select('login', 'mail');
        return response()->json($user);
    }

    public function userUpdate($id, Request $request)
    {
        return response()->json();
    }

    public function userDestroy($id)
    {
        $user = DB::table('users')->where('id', '=',$id)->delete();
        return response()->json($user);
    }
}
