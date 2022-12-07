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
Route::put('/appointment/{id}', [AppointmentController::class, 'appointmentUpdate']);
// Delete a appointment
Route::delete('/appointment/{id}', [AppointmentController::class, 'appointmentDestroy']);

// Route for credit infos
// List of all credit infos
Route::get('/credit-infos', [CreditInfoController::class, 'creditInfosIndex']);
// Display one credit infos
Route::get('/credit-infos/{id}', [CreditInfoController::class, 'creditInfosShow']);
// Add a new credit infos
Route::post('/credit-infos', [CreditInfoController::class, 'creditInfosStore']);
// Edit a credit infos
Route::put('/credit-infos/{id}', [CreditInfoController::class, 'creditInfosUpdate']);
// Delete a credit infos
Route::delete('/credit-infos/{id}', [CreditInfoController::class, 'creditInfosDestroy']);

// Route for Family Situation
// List of all family Situation
Route::get('/situation-familiale', [FamilySituationController::class, 'familySituationIndex']);
// Display one family situation
Route::get('/situation-familiale/{id}', [FamilySituationController::class, 'familySituationShow']);
// Add a new family situation
Route::post('/situation-familiale', [FamilySituationController::class, 'familySituationStore']);
// Edit a family situation
Route::put('/situation-familiale/{id}', [FamilySituationController::class, 'familySituationUpdate']);
// Delete a family situation
Route::delete('/situation-familiale/{id}', [FamilySituationController::class, 'familySituationDestroy']);