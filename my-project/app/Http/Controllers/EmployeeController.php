<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

/**
     * @OA\Get(
     *      path="/employee",
     *      operationId="employeeIndex",
     *      tags={"employee"},

     *      summary="Get List Of employee",
     *      description="Return the list employee",
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
     

     * @OA\Get(
     *      path="/employee/{id}",
     *      operationId="employeeShow",
     *      tags={"employee"},
     *      summary="Get a one employee",
     *      description="Returns a one employee",
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
     

     * @OA\Delete(
     *      path="/employee/{id}",
     *      operationId="employeeDestroy",
     *      tags={"employee"},
     *      summary="Delete a one employee",
     *      description="Returns a one employee",
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

    public function employeeStore(Request $request)
    {
        return response()->json();
    }

    public function employeeIndex()
    {
        $employee = Employee::all();
        return response()->json($employee);
    }

    public function employeeShow($id)
    {
        $employee = DB::table('employees')->select('firstname','lastname','job','id_users')->where('id', '=', $id)->get();
        return response()->json($employee);
    }

    public function employeeUpdate($id, Request $request)
    {
        return response()->json();
    }

    public function employeeDestroy($id)
    {
        $employee = DB::table('employees')->where('id', '=', $id)->delete();
        return response()->json($employee);
    }
}

