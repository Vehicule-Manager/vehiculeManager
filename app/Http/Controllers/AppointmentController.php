<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function appointmentStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get(
     *      path="/appointments",
     *      operationId="appointmentIndex",
     *      tags={"Appointment"},

     *      summary="Get List Of appointment",
     *      description="Return the list appointment",
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
    public function appointmentIndex()
    {
        $appointment = Appointment::all();

        return response()->json($appointment);
    }

    /**
     * @OA\Get(
     *      path="/appointments/{id}",
     *      operationId="appointmentShow",
     *      tags={"Appointment"},
     *      summary="Get a one appointment",
     *      description="Returns a one appointment",
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
    public function appointmentShow($id)
    {
        $appointment = DB::table('appointments')->select('date_and_hour', 'description', 'id_employees', 'id_clients', 'id_subjects')->where('id', '=', $id)->get();

        return response()->json($appointment);
    }

    public function appointmentUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete(
     *      path="/appointments/{id}",
     *      operationId="appointmentDestroy",
     *      tags={"Appointment"},
     *      summary="Delete a one appointment",
     *      description="Returns a one appointment",
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
    public function appointmentDestroy($id)
    {
        $appointment = DB::table('appointments')->where('id', '=', $id)->delete();

        return response()->json($appointment);
    }
}
