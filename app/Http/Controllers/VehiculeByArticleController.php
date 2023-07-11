<?php

namespace App\Http\Controllers;

use App\Models\VehiculeByArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculeByArticleController extends Controller
{
    public function articleByVehiculeStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get(
     *      path="/articles/vehicules",
     *      operationId="articleByVehiculeIndex",
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
    public function articleByVehiculeIndex()
    {
        $vehiculeByArticle = VehiculeByArticle::all();

        return response()->json($vehiculeByArticle);
    }

    /**
     * @OA\Get(
     *      path="/articles/vehicules/{id}",
     *      operationId="articleByVehiculeShow",
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
    public function articleByVehiculeShow($id)
    {
        $vehiculeByArticle = DB::table('vehicules_by_articles')->select('id_vehicules', 'id_articles')->where('id', '=', $id)->get();

        return response()->json($vehiculeByArticle);
    }

    public function articleByVehiculeUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete(
     *      path="/articles/vehicules/{id}",
     *      operationId="articleByVehiculeDestroy",
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
    public function articleByVehiculeDestroy($id)
    {
        $vehiculeByArticle = DB::table('vehicules_by_articles')->where('id', '=', $id)->delete();

        return response()->json($vehiculeByArticle);
    }

    /**
     * @OA\Get(
     *      path="/vehicules/{id}/articles",
     *      operationId="articleByVehiculeShowByVehicle",
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
    public function articleByVehiculeShowByVehicle($id)
    {
        $vehiculeByArticle = DB::table('vehicules_by_articles')->select('id_vehicules', 'id_articles')->where('id_vehicules', '=', $id)->get();

        return response()->json($vehiculeByArticle);
    }

    /**
     * @OA\Get(
     *      path="/articles/{id}/vehicules",
     *      operationId="articleByVehiculeShowByArticle",
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
    public function articleByVehiculeShowByArticle($id)
    {
        $vehiculeByArticle = DB::table('vehicules_by_articles')->select('id_vehicules', 'id_articles')->where('id_articles', '=', $id)->get();

        return response()->json($vehiculeByArticle);
    }
}
