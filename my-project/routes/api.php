<?php


use App\Http\Controllers\EnergieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CreditInfoController;
use App\Http\Controllers\FamilySituationController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProfessionnalSituationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\GearBoxeController;
use App\Http\Controllers\LeavingVehiculeController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\RoleController;

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

//route for type
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

//route for vehicule
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

// Route for Media
// List of all Media
Route::get('/media', [MediaController::class, 'mediaIndex']);
// Display one Media
Route::get('/media/{id}', [MediaController::class, 'mediaShow']);
// Add a new Media
Route::post('/media', [MediaController::class, 'mediaStore']);
// Edit a Media
Route::put('/media/{id}', [MediaController::class, 'mediaUpdate']);
// Delete a Media
Route::delete('/media/{id}', [MediaController::class, 'mediaDestroy']);

// Route for Employee
// List of all Employee
Route::get('/employee', [EmployeeController::class, 'employeeIndex']);
// Display one Employee
Route::get('/employee/{id}', [EmployeeController::class, 'employeeShow']);
// Add a new Employee
Route::post('/employee', [EmployeeController::class, 'employeeStore']);
// Edit a Employee
Route::put('/employee/{id}', [EmployeeController::class, 'employeeUpdate']);
// Delete a Employee
Route::delete('/employee/{id}', [EmployeeController::class, 'employeeDestroy']);

// Route for User
// List of all users
Route::get('/user', [UserController::class, 'userIndex']);
// Display one user
Route::get('/user/{id}', [UserController::class, 'userShow']);
// Add user
Route::post('/user', [UserController::class, 'userStore']);
// Update a user
Route::put('/user/{id}', [UserController::class, 'userUpdate']);
// Delete a user
Route::delete('/user/{id}', [UserController::class, 'userDestroy']);

// Route for Brand
// List of all brand
Route::get('/brand', [BrandController::class, 'brandIndex']);
// Display one brand
Route::get('/brand/{id}', [BrandController::class, 'brandShow']);
// Add brand
Route::post('/brand', [BrandController::class, 'brandStore']);
// Update a brand
Route::put('/brand/{id}', [BrandController::class, 'brandUpdate']);
// Delete a brand
Route::delete('/brand/{id}', [BrandController::class, 'brandDestroy']);

// Route for Status
// List of all status
Route::get('/status', [StatusController::class, 'statusIndex']);
// Display one status
Route::get('/status/{id}', [StatusController::class, 'statusShow']);
// Add status
Route::post('/status', [StatusController::class, 'statusStore']);
// Update a status
Route::put('/status/{id}', [StatusController::class, 'statusUpdate']);
// Delete a status
Route::delete('/status/{id}', [StatusController::class, 'statusDestroy']);

// Route for LeavingVehicule
// List of all leavingVehicule
Route::get('/leavingVehicule', [LeavingVehiculeController::class, 'leavingVehiculeIndex']);
// Display one leavingVehicule
Route::get('/leavingVehicule/{id}', [LeavingVehiculeController::class, 'leavingVehiculeShow']);
// Add leavingVehicule
Route::post('/leavingVehicule', [LeavingVehiculeController::class, 'leavingVehiculeStore']);
// Update a leavingVehicule
Route::put('/leavingVehicule/{id}', [LeavingVehiculeController::class, 'leavingVehiculeUpdate']);
// Delete a leavingVehicule
Route::delete('/leavingVehicule/{id}', [LeavingVehiculeController::class, 'leavingVehiculeDestroy']);

// Route for GearBoxe
// List of all gearBoxe
Route::get('/gearBoxe', [GearBoxeController::class, 'gearBoxeIndex']);
// Display one gearBoxe
Route::get('/gearBoxe/{id}', [GearBoxeController::class, 'gearBoxeShow']);
// Add gearBoxe
Route::post('/gearBoxe', [GearBoxeController::class, 'gearBoxeStore']);
// Update a gearBoxe
Route::put('/gearBoxe/{id}', [GearBoxeController::class, 'gearBoxeUpdate']);
// Delete a gearBoxe
Route::delete('/gearBoxe/{id}', [GearBoxeController::class, 'gearBoxeDestroy']);

// Route for Article
// List of all article
Route::get('/article', [ArticleController::class, 'articleIndex']);
// Display one article
Route::get('/article/{id}', [ArticleController::class, 'articleShow']);
// Add article
Route::post('/article', [ArticleController::class, 'articleStore']);
// Update a article
Route::put('/article/{id}', [ArticleController::class, 'articleUpdate']);
// Delete a article
Route::delete('/article/{id}', [ArticleController::class, 'articleDestroy']);

// Route for Subject
// List of all subjects
Route::get('/subject', [SubjectController::class, 'subjectIndex']);
// Display one subject
Route::get('/subject/{id}', [SubjectController::class, 'subjectShow']);
// Add subject
Route::post('/subject', [SubjectController::class, 'subjectStore']);
// Update subject
Route::put('/subject/{id}', [SubjectController::class, 'subjectUpdate']);
// Delete subject
Route::delete('/subject/{id}', [SubjectController::class, 'subjectDestroy']);

// Route for Client
// List of all clients
Route::get('/client', [ClientController::class, 'clientIndex']);
// Display one client
Route::get('/client/{id}', [ClientController::class, 'clientShow']);
// Add a client
Route::post('/client', [ClientController::class, 'clientStore']);
// Update a client
Route::put('/client/{id}', [ClientController::class, 'clientUpdate']);
// Delete a client
Route::delete('/client/{id}', [ClientController::class, 'clientDestroy']);

// Route for Role
// List of all roles
Route::get('/role', [RoleController::class, 'roleIndex']);
// Display one role
Route::get('/role/{id}', [RoleController::class, 'roleShow']);
// Add a role
Route::post('/role', [RoleController::class, 'roleStore']);
// Update a role
Route::put('/role/{id}', [RoleController::class, 'roleUpdate']);
// Delete a role
Route::delete('/role/{id}', [RoleController::class, 'roleDestroy']);

// Route for Energie
// List of all energies
Route::get('/energie', [EnergieController::class, 'energieIndex']);
// Display one energie
Route::get('/energie/{id}', [EnergieController::class, 'energieShow']);
// Add a energie
Route::post('/energie', [EnergieController::class, 'energieStore']);
// Update a energie
Route::put('/energie/{id}', [EnergieController::class, 'energieUpdate']);
// Delete a energie
Route::delete('/energie/{id}', [EnergieController::class, 'energieDestroy']);
