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

