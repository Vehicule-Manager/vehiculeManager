<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employeeStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get(
     *      path="/employees",
     *      operationId="employeeIndex",
     *      tags={"Employee"},

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
     */

    public function employeeIndex()
    {
        $employee = Employee::all();
        return response()->json($employee);
    }

    /**
     * @OA\Get(
     *      path="/employees/{id}",
     *      operationId="employeeShow",
     *      tags={"Employee"},
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
     */

    public function employeeShow($id)
    {
        $employee = DB::table('employees')->select('firstname','lastname','job','id_users')->where('id', '=', $id)->get();
        return response()->json($employee);
    }

    public function employeeUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete(
     *      path="/employees/{id}",
     *      operationId="employeeDestroy",
     *      tags={"Employee"},
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

    public function employeeDestroy($id)
    {
        $employee = DB::table('employees')->where('id', '=', $id)->delete();
        return response()->json($employee);
    }
}

