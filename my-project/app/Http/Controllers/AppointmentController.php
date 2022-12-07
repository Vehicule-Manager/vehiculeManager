<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function appointmentStore(Request $request)
    {
        return response()->json();
    }

    public function appointmentIndex()
    {
        $appointment = Appointment::all();
        return response()->json($appointment);
    }

    public function appointmentShow($id)
    {
        $appointment = DB::table('appointments')->select('date_and_hour','description','id_employees','id_clients','id_subjects')->where('id', '=', $id)->get();
        return response()->json($appointment);
    }

    public function appointmentUpdate($id, Request $request)
    {
        return response()->json();
    }
}
