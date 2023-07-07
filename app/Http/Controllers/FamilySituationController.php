<?php

namespace App\Http\Controllers;

use App\Models\FamilySituation;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FamilySituationController extends Controller
{
    public function familySituationStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get(
     *      path="/family-situations",
     *      operationId="familySituationIndex",
     *      tags={"situation familiale"},

     *      summary="Get List Of family Situation",
     *      description="Return the list family Situation",
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

    public function familySituationIndex()
    {
        $familySituation = familySituation::all();
        return response()->json($familySituation);
    }

    /**
     * @OA\Get(
     *      path="/family-situations/{id}",
     *      operationId="familySituationShow",
     *      tags={"situation familiale"},
     *      summary="Get a one family Situation",
     *      description="Returns a one family Situation",
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

    public function familySituationShow($id)
    {
        $familySituation = DB::table('family_situations')->select('name','numberOfChild')->where('id', '=', $id)->get();
        return response()->json($familySituation);
    }

    public function familySituationUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete(
     *      path="/family-situations/{id}",
     *      operationId="familySituationDestroy",
     *      tags={"situation familiale"},
     *      summary="Delete a one family Situation",
     *      description="Returns a one family Situation",
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

    public function familySituationDestroy($id)
    {
        $familySituation = DB::table('family_situations')->where('id', '=', $id)->delete();
        return response()->json($familySituation);
    }
}
