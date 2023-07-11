<?php

namespace App\Http\Controllers;

use App\Models\VehiculeByClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculeByClientController extends Controller
{
    public function vehiculeByClientStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get(
     *      path="/clients/vehicules",
     *      operationId="vehiculeByClientIndex",
     *      tags={"VehiculeByClients"},

     *      summary="Get List Of Vehicule per Clients",
     *      description="Returns all vehicule per clients",
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
    public function vehiculeByClientIndex()
    {
        $vehiculesByClients = VehiculeByClient::all();

        return response()->json($vehiculesByClients);
    }

    /**
     * @OA\Get(
     *      path="/clients/vehicules/{id}",
     *      operationId="vehiculeByClientShow",
     *      tags={"VehiculeByClients"},

     *      summary="Get Of Vehicule",
     *      description="Returns the vehicule",
     *
     *     @OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
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
    public function vehiculeByClientShow($id)
    {
        $vehiculeByClient = DB::table('vehicules_by_clients')->select('id_vehicles', 'id_clients')->where('id', '=', $id)->get();

        return response()->json($vehiculeByClient);
    }

    public function vehiculeByClientUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete(
     *      path="/vehicules/{id}",
     *      operationId="vehiculeDestroy",
     *      tags={"VehiculeByClients"},

     *      summary="Get Of Vehicule",
     *      description="Returns the vehicule",
     *
     *     @OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
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
    public function vehiculeByClientDestroy($id)
    {
        $vehiculeByClient = DB::table('vehicules_by_clients')->where('id', '=', $id)->delete();

        return response()->json($vehiculeByClient);
    }

    /**
     * @OA\Get(
     *      path="/vehicules/{id}/clients",
     *      operationId="vehiculeByClientShowByVehicle",
     *      tags={"VehiculeByClients"},

     *      summary="Get List Of Vehicule",
     *      description="Returns all vehicule",
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
    public function vehiculeByClientShowByVehicule()
    {
        $vehiculesByClient = DB::table('vehicules_by_clients')->select('id_vehicules', 'id_clients')->where('id_vehicules', '=', $id)->get();

        return response()->json($vehiculesByClient);
    }
}
