<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CreditInfoController;
use App\Http\Controllers\FamilySituationController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProfessionnalSituationController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route for Appointment
// List of all appointment
Route::get('/appointment', [AppointmentController::class, 'appointmentIndex']);
// Display one appointment
Route::get('/appointment/{id}', [AppointmentController::class, 'appointmentShow']);
// Add a new appointment
Route::post('/appointment', [AppointmentController::class, 'appointmentStore']);
// Edit a appointment
Route::put('/appointment/{id}', [AppointmentController::class, 'appointmentShow']);