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
    /**
     * @OA\Get(
     *      path="/users",
     *      operationId="userIndex",
     *      tags={"user"},

     *      summary="Get List Of user",
     *      description="Return the list user",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */

    // Récupérer toutes les informations relatives aux utilisateurs
    public function userIndex()
    {
        $user = user::all();
        return response()->json($user);
    }

    /**
     * @OA\Get(
     *      path="/users/{id}",
     *      operationId="userShow",
     *      tags={"user"},
     *      summary="Get a one user",
     *      description="Returns a one user",
     *@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *     @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */

    // Récupérer les informations d'un utilisateur
    public function userShow($id)
    {
        $user = DB::table('users')->select('login', 'mail')->where('id', '=', $id)->get();
        return response()->json($user);
    }

    public function userUpdate($id, Request $request)
    {
        return response()->json();
    }
    /**
     * @OA\Delete(
     *      path="/users/{id}",
     *      operationId="userDestroy",
     *      tags={"user"},
     *      summary="Delete a one user",
     *      description="Returns a one user",
     *@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *     @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */

    public function userDestroy($id)
    {
        $user = DB::table('users')->where('id', '=',$id)->delete();
        return response()->json($user);
    }
}
