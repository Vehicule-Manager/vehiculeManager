<?php

namespace App\Http\Controllers;

use App\Models\Energie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnergieController extends Controller
{
    public function energieStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get (
     *      path="/energies",
     *      operationId="energieIndex",
     *      tags={"energie"},

     *      summary="Get Of Energie",
     *      description="Returns the energie",
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

    public function energieIndex()
    {
        $energie = Energie::all();
        return response()->json($energie);
    }

    /**
     * @OA\Get (
     *      path="/energie/{id}",
     *      operationId="energieShow",
     *      tags={"energie"},

     *      summary="Get Of Energie",
     *      description="Returns the energie",
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

    public function energieShow($id)
    {
        $article = DB::table('energies')->select('name')->where('id', '=', $id)->get();
        return response()->json($article);
    }

    public function energieUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete (
     *      path="/energie/{id}",
     *      operationId="energieDestroy",
     *      tags={"energie"},

     *      summary="Get Of Energie",
     *      description="Returns the energie",
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

    public function energieDestroy($id)
    {
        $energie = DB::table('energies')->where('id','=',$id)->delete();
        return response()->json($energie);
    }
}
