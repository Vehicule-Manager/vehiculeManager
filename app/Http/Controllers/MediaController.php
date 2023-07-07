<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class MediaController extends Controller
{
    public function mediaStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get(
     *      path="/medias",
     *      operationId="mediaIndex",
     *      tags={"media"},

     *      summary="Get List Of media",
     *      description="Return the list media",
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
    public function mediaIndex()
    {
        $media = Media::all();
        return response()->json($media);
    }

    /**
     * @OA\Get(
     *      path="/medias/{id}",
     *      operationId="mediaShow",
     *      tags={"media"},
     *      summary="Get a one media",
     *      description="Returns a one media",
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

    public function mediaShow($id)
    {
        $media = DB::table('medias')->select('link', 'name', 'type', 'id_clients', 'id_vehicules')->where('id', '=', $id)->get();
        return response()->json($media);
    }

    public function mediaUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete(
     *      path="/medias/{id}",
     *      operationId="mediaDestroy",
     *      tags={"media"},
     *      summary="Delete a one media",
     *      description="Returns a one media",
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
    public function mediaDestroy($id)
    {
        $media = DB::table('medias')->where('id', '=', $id)->delete();
        return response()->json($media);
    }
}
