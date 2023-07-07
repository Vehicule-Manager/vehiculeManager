<?php

namespace App\Http\Controllers;

use App\Models\GearBoxe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GearBoxeController extends Controller
{
    public function gearBoxeStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get(
     *      path="/gearBoxes",
     *      operationId="gearBoxeIndex",
     *      tags={"gearBoxe"},

     *      summary="Get List Of gearBoxe",
     *      description="Return the list gearBoxe",
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *
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
    public function gearBoxeIndex()
    {
        $gearBoxe = GearBoxe::all();

        return response()->json($gearBoxe);
    }

    /**
     * @OA\Get(
     *      path="/gearBoxes/{id}",
     *      operationId="gearBoxeShow",
     *      tags={"gearBoxe"},
     *      summary="Get a one gearBoxe",
     *      description="Returns a one gearBoxe",
     *
     *@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *
     *     @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *
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
    public function gearBoxeShow($id)
    {
        $gearBoxe = DB::table('gear_boxes')->select('name')->where('id', '=', $id)->get();

        return response()->json($gearBoxe);
    }

    public function gearBoxeUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete(
     *      path="/gearBoxes/{id}",
     *      operationId="gearBoxeDestroy",
     *      tags={"gearBoxe"},
     *      summary="Delete a one gearBoxe",
     *      description="Returns a one gearBoxe",
     *
     *@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *
     *     @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *
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
    public function gearBoxeDestroy($id)
    {
        $gearBoxe = DB::table('gear_boxes')->where('id', '=', $id)->delete();

        return response()->json($gearBoxe);
    }
}
