<?php

namespace App\Http\Controllers;

use App\Models\CreditInfo;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CreditInfoController extends Controller
{
    public function creditInfosStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get(
     *      path="/credit-infos",
     *      operationId="creditInfosIndex",
     *      tags={"credit infos"},

     *      summary="Get List Of credit infos",
     *      description="Return the list credit infos",
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

    public function creditInfosIndex()
    {
        $creditInfo = CreditInfo::all();
        return response()->json($creditInfo);
    }

    /**
     * @OA\Get(
     *      path="/credit-infos/{id}",
     *      operationId="creditInfosShow",
     *      tags={"credit infos"},
     *      summary="Get a one credit infos",
     *      description="Returns a one credit infos",
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

    public function creditInfosShow($id)
    {
        $creditInfo = DB::table('credit_infos')->select('placeOfBirth', 'nationality', 'budgets', 'contract', 'contractDate', 'banquet', 'professionnalStatus', 'familysituation')->where('id', '=', $id)->get();
        return response()->json($creditInfo);
    }

    public function creditInfosUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete(
     *      path="/credit-infos/{id}",
     *      operationId="creditInfosDestroy",
     *      tags={"credit infos"},
     *      summary="Delete a one credit infos",
     *      description="Returns a one credit infos",
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

    public function creditInfosDestroy($id)
    {
        $creditInfo = DB::table('credit_infos')->where('id', '=', $id)->delete();
        return response()->json($creditInfo);
    }
}
