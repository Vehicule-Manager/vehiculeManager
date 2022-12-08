<?php

use App\Http\Controllers\TypeController;
use App\Http\Controllers\VehiculeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CreditInfoController;
use App\Http\Controllers\FamilySituationController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProfessionnalSituationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SubjectController;

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

//route pour type
// List of all type
Route::get('/type', [TypeController::class, 'typeIndex']);
// Display one type
Route::get('/type/{id}', [TypeController::class, 'typeShow']);
// Add a new type
Route::post('/type', [TypeController::class, 'typeStore']);
// Edit a type
Route::put('/type/{id}', [TypeController::class, 'typeUpdate']);
// Delete a type
Route::delete('/type/{id}', [TypeController::class, 'typeDestroy']);

//route pour vehicule
// List of all vehicule
Route::get('/vehicule', [VehiculeController::class, 'vehiculeIndex']);
// Display one vehicule
Route::get('/vehicule/{id}', [VehiculeController::class, 'vehiculeShow']);
// Add a new vehicule
Route::post('/vehicule', [VehiculeController::class, 'vehiculeStore']);
// Edit a vehicule
Route::put('/vehicule/{id}', [VehiculeController::class, 'vehiculeUpdate']);
// Delete a vehicule
Route::delete('/vehicule/{id}', [VehiculeController::class, 'vehiculeDestroy']);


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

// Route for Situation profesionnal
// List of all Situation profesionnal
Route::get('/situation-professionnelle', [ProfessionnalSituationController::class, 'ProfessionnalSituationIndex']);
// Display one Situation profesionnal
Route::get('/situation-professionnelle/{id}', [ProfessionnalSituationController::class, 'ProfessionnalSituationShow']);
// Add a new Situation profesionnal
Route::post('/situation-professionnelle', [ProfessionnalSituationController::class, 'ProfessionnalSituationStore']);
// Edit a Situation profesionnal
Route::put('/situation-professionnelle/{id}', [ProfessionnalSituationController::class, 'ProfessionnalSituationUpdate']);
// Delete a Situation profesionnal
Route::delete('/situation-professionnelle/{id}', [ProfessionnalSituationController::class, 'ProfessionnalSituationDestroy']);

// Route for User
// List of all users
Route::get('/user', [UserController::class, 'userIndex']);
// Display one user
Route::get('/user/{id}', [UserController::class, 'userShow']);
// Add user
Route::post('/user', [VehiculeController::class, 'userStore']);
// Update a user
Route::put('/user/{id}', [UserController::class, 'userUpdate']);
// Delete a user
Route::delete('/user/{id}', [UserController::class, 'userDestroy']);
