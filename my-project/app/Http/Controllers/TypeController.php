<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    public function typeStore(Request $request)
    {
        $type = new type();

        $type->name = 'test';

        $type->save();
        return response()->json();
    }

    /**
     * @OA\Get(
     *      path="/types",
     *      operationId="typeIndex",
     *      tags={"type"},

     *      summary="Get List Of Vehicule",
     *      description="Returns all vehicule",
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

    public function typeIndex()
    {
        $type = Type::all();
        return response()->json($type);
    }

    /**
     * @OA\Get(
     *      path="/type/{id}",
     *      operationId="typeShow",
     *      tags={"type"},

     *      summary="Get Of Vehicule",
     *      description="Returns the vehicule",
     *     @OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
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
    public function typeShow($id)
    {
        $type = DB::table('types')->select('name')->where('id', '=', $id)->get();
        return response()->json($type);
    }

    public function typeUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete(
     *      path="/type/{id}",
     *      operationId="typeDestroy",
     *      tags={"type"},

     *      summary="Get Of Vehicule",
     *      description="Returns the vehicule",
     *     @OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
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
    public function typeDestroy($id)
    {
        $type = DB::table('types')->where('id', '=', $id)->delete();
        return response()->json($type);
    }
}
