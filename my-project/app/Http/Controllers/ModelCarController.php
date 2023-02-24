<?php

namespace App\Http\Controllers;

use App\Models\ModelCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModelCarController extends Controller
{
    public function modeleStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get (
     *      path="/model",
     *      operationId="modelIndex",
     *      tags={"model"},

     *      summary="Get Of model",
     *      description="Returns the model",
     *      @OA\Response (
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType (
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response (
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response (
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response (
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response (
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */

    public function modelIndex()
    {
        $model = ModelCar::all();
        return response()->json($model);
    }

    /**
     * @OA\Get (
     *      path="/model/{id}",
     *      operationId="modelShow",
     *      tags={"model"},

     *      summary="Get Of model",
     *      description="Returns the model",
     *     @OA\Parameter (
     *      name="id",
     *      in="path",
     *      required=true,
     *      @OA\Schema (
     *           type="integer"
     *      )
     *   ),
     *      @OA\Response (
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType (
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response (
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response (
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response (
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response (
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */

    public function modelShow($id)
    {
        $model = DB::table('model_car')->select('name')->where('id', '=', $id)->get();
        return response()->json($model);
    }

    public function modelUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete (
     *      path="/model/{id}",
     *      operationId="modelDestroy",
     *      tags={"model"},

     *      summary="Get Of model",
     *      description="Returns the model",
     *     @OA\Parameter (
     *      name="id",
     *      in="path",
     *      required=true,
     *      @OA\Schema (
     *           type="integer"
     *      )
     *   ),
     *      @OA\Response (
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response (
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response (
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response (
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response (
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */

    public function modelDestroy($id)
    {
        $model = DB::table('model_car')->where('id','=',$id)->delete();
        return response()->json($model);
    }
}
