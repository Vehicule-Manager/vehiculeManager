<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
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
        return response()->json();
    }

    public function editAppointment($id, Request $request)
    {
        return response()->json();
    }
}
