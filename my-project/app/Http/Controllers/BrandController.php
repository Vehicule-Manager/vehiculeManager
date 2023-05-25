<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function brandStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get(
     *      path="/brands",
     *      operationId="brandIndex",
     *      tags={"brand"},

     *      summary="Get List Of Brnad",
     *      description="Returns all brand",
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

    public function brandIndex()
    {
        $brand = Brand::all();
        return response()->json($brand);
    }

    /**
     * @OA\Get(
     *      path="/brand/{id}",
     *      operationId="brandShow",
     *      tags={"brand"},

     *      summary="Get Of Brand",
     *      description="Returns the brand",
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

    public function brandShow($id)
    {
        $brand = DB::table('brands')->select('id', 'name')->where('id', '=', $id)->get();
        return response()->json($brand);
    }

    public function brandUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete(
     *      path="/brand/{id}",
     *      operationId="brandDestroy",
     *      tags={"brand"},

     *      summary="Get Of Brand",
     *      description="Returns the brand",
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

    public function brandDestroy($id)
    {
        $brand = DB::table('brands')->where('id','=',$id)->delete();
        return response()->json($brand);
    }
}
