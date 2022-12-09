<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculeController extends Controller
{
    public function vehiculeStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get(
     *      path="/vehicule",
     *      operationId="vehiculeIndex",
     *      tags={"vehicule"},

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

    public function vehiculeIndex()
    {
        $vehicule = Vehicule::all();
        return response()->json($vehicule);
    }

    /**
     * @OA\Get(
     *      path="/vehicule/{id}",
     *      operationId="vehiculeShow",
     *      tags={"vehicule"},

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
    public function vehiculeShow($id)
    {
        $vehicule = DB::table('vehicules')->select('new','firstDateCicrulate','description','horsepower',
            'price','enterDate','leavingDate', 'immatriculation','id_statuses','id_clients','id_gear_boxes','id_brands',
            'id_energies','id_types')->where('id', '=', $id)->get();
        return response()->json($vehicule);
    }

    public function vehiculeUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete(
     *      path="/vehicule/{id}",
     *      operationId="vehiculeDestroy",
     *      tags={"vehicule"},

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
    public function vehiculeDestroy($id)
    {
        $vehicule = DB::table('vehicules')->where('id','=',$id)->delete();
        return response()->json($vehicule);
    }
}
