<?php

namespace App\Http\Controllers;

use App\Models\ProfessionnalSituation;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfessionnalSituationController extends Controller
{
    public function ProfessionnalSituationStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get(
     *      path="/professional-situations",
     *      operationId="ProfessionnalSituationIndex",
     *      tags={"Professional situation"},

     *      summary="Get List Of Professionnal Situation",
     *      description="Return the list Professionnal Situation",
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

    public function ProfessionnalSituationIndex()
    {
        $ProfessionnalSituation = ProfessionnalSituation::all();
        return response()->json($ProfessionnalSituation);
    }

    /**
     * @OA\Get(
     *      path="/professional-situations/{id}",
     *      operationId="ProfessionnalSituationShow",
     *      tags={"Professional situation"},
     *      summary="Get a one Professionnal Situation",
     *      description="Returns a one Professionnal Situation",
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

    public function ProfessionnalSituationShow($id)
    {
        $ProfessionnalSituation = DB::table('professionnal_situations')->select('name')->where('id', '=', $id)->get();
        return response()->json($ProfessionnalSituation);
    }

    public function ProfessionnalSituationUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete(
     *      path="/professional-situations/{id}",
     *      operationId="ProfessionnalSituationDestroy",
     *      tags={"Professional situation"},
     *      summary="Delete a one Professionnal Situation",
     *      description="Returns a one Professionnal Situation",
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

    public function ProfessionnalSituationDestroy($id)
    {
        $ProfessionnalSituation = DB::table('professionnal_situations')->where('id', '=', $id)->delete();
        return response()->json($ProfessionnalSituation);
    }
}
