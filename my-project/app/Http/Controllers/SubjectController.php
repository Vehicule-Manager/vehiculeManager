<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function subjectStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get(
     *      path="/subjects",
     *      operationId="subjectIndex",
     *      tags={"subjects"},

     *      summary="Get List Of subjects",
     *      description="Returns all subjects",
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

    public function subjectIndex()
    {
        $subject = Subject::all();
        return response()->json($subject);
    }

    /**
     * @OA\Get(
     *      path="/subject/{id}",
     *      operationId="subjectShow",
     *      tags={"subjects"},

     *      summary="Get Of subjects",
     *      description="Returns the subjects",
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

    public function subjectShow($id)
    {
        $subject = DB::table('subjects')->select('name')->where('id', '=', $id)->get();
        return response()->json($subject);
    }
    public function subjectUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete(
     *      path="/subject/{id}",
     *      operationId="subjectDestroy",
     *      tags={"subjects"},

     *      summary="Get Of Status",
     *      description="Returns the status",
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

    public function subjectDestroy($id)
    {
        $subject = DB::table('subjects')->where('id', '=', $id)->delete();
        return response()->json($subject);
    }
}
