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

    /**
     * @OA\Get(
     *      path="/role",
     *      operationId="roleIndex",
     *      tags={"role"},

     *      summary="Get List Of role",
     *      description="Return the list role",
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

    public function roleIndex()
    {
        $role = Role::all();
        return response()->json($role);
    }

    /**
     * @OA\Get(
     *      path="/role/{id}",
     *      operationId="roleShow",
     *      tags={"role"},
     *      summary="Get a one role",
     *      description="Returns a one role",
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

    public function roleShow($id)
    {
        $role = DB::table('roles')->select('name')->where('id', '=', $id)->get();
        return response()->json($role);
    }

    public function roleUpdate($id, Request $request)
    {
        return response()->json();
    }
    /**
     * @OA\Delete(
     *      path="/role/{id}",
     *      operationId="roleDestroy",
     *      tags={"rendez vous"},
     *      summary="Delete a one role",
     *      description="Returns a one role",
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

    public function roleDestroy($id)
    {
        $role = DB::table('roles')->where('id', '=', $id)->delete();
        return response()->json($role);
    }
}
