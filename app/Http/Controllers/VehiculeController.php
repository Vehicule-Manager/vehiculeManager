<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class VehiculeController extends Controller
{
    public function vehiculeStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get(
     *      path="/vehicules",
     *      operationId="vehiculeIndex",
     *      tags={"vehicule"},

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
    public function vehiculeIndex()
    {
        $vehicules = QueryBuilder::for(Vehicule::class)
            ->allowedFilters(AllowedFilter::exact('id_model_car'), AllowedFilter::exact('horsepower'), AllowedFilter::exact('id_statuses'), AllowedFilter::exact('id_clients'), AllowedFilter::exact('id_gear_boxes'), AllowedFilter::exact('id_brands'), AllowedFilter::exact('id_energies'), AllowedFilter::exact('id_types')) // Add the filters you want to allow, e.g., make, model, year
            ->paginate(9);

        return response()->json($vehicules);
    }

    /**
     * @OA\Get(
     *      path="/vehicules/{id}",
     *      operationId="vehiculeShow",
     *      tags={"vehicule"},

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
    public function vehiculeShow($id)
    {
        $vehicule = DB::table('vehicules')->select('id', 'new', 'firstDateCicrulate', 'description', 'horsepower',
            'price', 'enterDate', 'leavingDate', 'immatriculation', 'id_statuses', 'id_clients', 'id_gear_boxes', 'id_brands',
            'id_energies', 'id_types', 'id_model_car')->where('id', '=', $id)->get();

        return response()->json($vehicule);
    }

    public function vehiculeUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete(
     *      path="/vehicules/{id}",
     *      operationId="vehiculeDestroy",
     *      tags={"vehicule"},

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
    public function vehiculeDestroy($id)
    {
        $vehicule = DB::table('vehicules')->where('id', '=', $id)->delete();

        return response()->json($vehicule);
    }

    /**
     * @OA\Get(
     *      path="/vehicules",
     *      operationId="vehiculeTable",
     *      tags={"vehicule"},

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
    public function vehiculeTable()
    {
        $vehicules = Vehicule::all();

        return response()->json($vehicules);
    }
}
