<?php

namespace App\Http\Controllers;

use App\Models\LeavingVehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeavingVehiculeController extends Controller
{
    public function leavingVehiculeStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get (
     *      path="/leavingVehicules",
     *      operationId="leavingVehiculeIndex",
     *      tags={"Leaving Vehicule"},

     *      summary="Get Of LeavingVehicule",
     *      description="Returns the leavingVehicule",
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

    public function leavingVehiculeIndex()
    {
        $leavingVehicule = LeavingVehicule::all();
        return response()->json($leavingVehicule);
    }

    /**
     * @OA\Get (
     *      path="/leavingVehicules/{id}",
     *      operationId="leaving VehiculeShow",
     *      tags={"Leaving Vehicule"},

     *      summary="Get Of LeavingVehicule",
     *      description="Returns the leavingVehicule",
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

    public function leavingVehiculeShow($id)
    {
        $leavingVehicule = DB::table('leaving_vehicules')->select('leavingDate','renderDate','id_statuses','id_clients','id_vehicules')->where('id', '=', $id)->get();
        return response()->json($leavingVehicule);
    }

    public function leavingVehiculeUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete (
     *      path="/leavingVehicules/{id}",
     *      operationId="leavingVehiculeDestroy",
     *      tags={"Leaving Vehicule"},

     *      summary="Get Of LeavingVehicule",
     *      description="Returns the leavingVehicule",
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

    public function leavingVehiculeDestroy($id)
    {
        $leavingVehicule = DB::table('leaving_vehicules')->where('id','=',$id)->delete();
        return response()->json($leavingVehicule);
    }

    /**
     * @OA\Get (
     *      path="/leavingVehicules/client/{$clientId}",
     *      operationId="leasingVehiclesByClientId",
     *      tags={"Leaving Vehicule"},

     *      summary="Get Of LeavingVehicule Client",
     *      description="Returns the leavingVehicule",
     *     @OA\Parameter(
     *      name="id_clients",
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

    public function leasingVehiclesByClientId($clientId)
    {
        $leasingVehicles = DB::table('leaving_vehicules')
            ->where('id_clients', '=', $clientId)
            ->get();

        return response()->json($leasingVehicles);
    }
}
