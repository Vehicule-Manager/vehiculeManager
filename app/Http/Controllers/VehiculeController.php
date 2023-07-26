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
        $validatedData = $request->validate([
            'new' => 'required|boolean',
            'firstDateCicrulate' => 'required|date',
            'description' => 'required|string',
            'horsepower' => 'required|numeric',
            'price' => 'required|numeric',
            'enterDate' => 'required|date',
            'leavingDate' => 'required|date',
            'immatriculation' => 'required|string',
            'id_statuses' => 'required|integer',
            'id_gear_boxes' => 'required|integer',
            'id_brands' => 'required|integer',
            'id_energies' => 'required|integer',
            'id_types' => 'required|integer',
            'id_model_car' => 'required|integer',
        ]);
        $vehicule = Vehicule::create($validatedData);

        return response()->json($vehicule, 201);
    }

    /**
     * @OA\Get(
     *      path="/vehicules",
     *      operationId="vehiculeIndex",
     *      tags={"Vehicule"},

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
            ->allowedFilters(AllowedFilter::exact('id_model_car'), AllowedFilter::exact('horsepower'), AllowedFilter::exact('id_statuses'), AllowedFilter::exact('id_gear_boxes'), AllowedFilter::exact('id_brands'), AllowedFilter::exact('id_energies'), AllowedFilter::exact('id_types')) // Add the filters you want to allow, e.g., make, model, year
            ->paginate(9);

        return response()->json($vehicules);
    }

    /**
     * @OA\Get(
     *      path="/vehicules/{id}",
     *      operationId="vehiculeShow",
     *      tags={"Vehicule"},

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
            'price', 'enterDate', 'leavingDate', 'immatriculation', 'id_statuses', 'id_gear_boxes', 'id_brands',
            'id_energies', 'id_types', 'id_model_car')->where('id', '=', $id)->get();

        return response()->json($vehicule);
    }

    public function vehiculeUpdate($id, Request $request)
    {
        return response()->json();
    }

    // Doc pour delete à remettre

    public function vehiculeDestroy($id)
    {
        $vehicule = DB::table('vehicules')->where('id', '=', $id)->delete();

        return response()->json($vehicule);
    }

    /**
     * @OA\Get(
     *      path="/vehiculesTable",
     *      operationId="vehiculeTable",
     *      tags={"Vehicule"},

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
