<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{

    /**
     * @OA\Post(
     *      path="/addcustomers",
     *      operationId="clientStore",
     *      tags={"Customer"},
     *      summary="Add a client",
     *      description="Add a new client",
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
    public function clientStore(Request $request)
    {
       $validatedData = $request->validate([
           'civility' => 'required|string',
           'firstname' => 'required|string',
           'lastname' => 'required|string',
           'birthDate' => 'required|date',
           'address' => 'required|string',
           'optionalAddress' => 'nullable|string',
           'zipCode' => 'required|string',
           'city' => 'required|string',
           'id_users' => 'required|integer',
           'id_creditInfos' => 'required|integer',
       ]);

       $client = Client::create($validatedData);
       return response()->json($client, 201);
    }

    /**
     * @OA\Get(
     *      path="/customers",
     *      operationId="clientIndex",
     *      tags={"Customer"},
     *      summary="Get List Of client",
     *      description="Return the list client",
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

    public function clientIndex()
    {
        $client = Client::all();

        return response()->json($client);
    }

    /**
     * @OA\Get(
     *      path="/customers/{id}",
     *      operationId="clientShow",
     *      tags={"Customer"},
     *      summary="Get a one client",
     *      description="Returns a one client",
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
    public function clientShow($id)
    {
        $client = DB::table('clients')->select('civility', 'firstname', 'lastname', 'birthDate', 'address', 'optionalAddress', 'zipCode', 'city', 'id_users', 'id_creditInfos')->where('id', '=', $id)->get();

        return response()->json($client);
    }

    public function clientUpdate($id, Request $request)
    {
        return response()->json();

    }

    /**
     * @OA\Delete(
     *      path="/customers/{id}",
     *      operationId="clientDestroy",
     *      tags={"Customer"},
     *      summary="Delete a one client",
     *      description="Returns a one client",
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
    public function clientDestroy($id)
    {
        $client = DB::table('clients')->where('id', '=', $id)->delete();

        return response()->json($client);
    }

    /**
     * @OA\Get(
     *      path="/user/customer/{id}",
     *      operationId="clientByUser",
     *      tags={"Customer"},
     *      summary="Get a one client",
     *      description="Returns a one client",
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
    public function clientByUser($id)
    {
        $client = DB::table('clients')->select('id', 'civility', 'firstname', 'lastname', 'birthDate', 'address', 'optionalAddress', 'zipCode', 'city', 'id_creditInfos')->where('id_users', '=', $id)->get();

        return response()->json($client);
    }
}
