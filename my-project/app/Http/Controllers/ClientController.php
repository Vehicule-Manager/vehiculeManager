<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Client;

class ClientController extends Controller
{
    public function clientStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get(
     *      path="/client",
     *      operationId="clientIndex",
     *      tags={"clients"},
     *      summary="Get List Of client",
     *      description="Return the list client",
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
    public function clientIndex()
    {
        $client = Client::all();
        return response()->json($client);
    }

    /**
     * @OA\Get(
     *      path="/client/{id}",
     *      operationId="clientShow",
     *      tags={"rendez vous"},
     *      summary="Get a one client",
     *      description="Returns a one client",
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
    public function clientShow($id)
    {
        $subject = DB::table('clients')->select('civility', 'firstname', 'lastname', 'birthDate', 'address', 'optionalAddress', 'zipCode', 'city', 'id_users', 'id_creditInfos')->where('id', '=', $id)->get();
        return response()->json();
    }

    public function clientUpdate($id, Request $request)
    {
        return response()->json();

    }

    /**
     * @OA\Delete(
     *      path="/client/{id}",
     *      operationId="clientDestroy",
     *      tags={"rendez vous"},
     *      summary="Delete a one client",
     *      description="Returns a one client",
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
    public function clientDestroy($id)
    {
        $client = DB::table('clients')->where('id', '=', $id)->delete();
        return response()->json($client);
    }
}
