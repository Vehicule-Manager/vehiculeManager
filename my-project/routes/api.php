<?php


use App\Http\Controllers\EnergieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;
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
use App\Http\Controllers\ModelCarController;

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

    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);


    Route::get('/todos', [TodoController::class, 'index']);
    Route::post('/todo', [TodoController::class, 'store']);
    Route::get('/todo/{id}', [TodoController::class, 'show']);
    Route::put('/todo/{id}', [TodoController::class, 'update']);
    Route::delete('/todo/{id}', [TodoController::class, 'destroy']);

// Route for Appointment
// List of all appointment
Route::get('/appointments', [AppointmentController::class, 'appointmentIndex']);
// Display one appointment
Route::get('/appointments/{id}', [AppointmentController::class, 'appointmentShow']);
// Add a new appointment
Route::post('/appointments', [AppointmentController::class, 'appointmentStore']);
// Edit a appointment
Route::put('/appointments/{id}', [AppointmentController::class, 'appointmentUpdate']);
// Delete a appointment
Route::delete('/appointments/{id}', [AppointmentController::class, 'appointmentDestroy']);

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
Route::get('/types', [TypeController::class, 'typeIndex']);
// Display one type
Route::get('/types/{id}', [TypeController::class, 'typeShow']);
// Add a new type
Route::post('/types', [TypeController::class, 'typeStore']);
// Edit a type
Route::put('/types/{id}', [TypeController::class, 'typeUpdate']);
// Delete a type
Route::delete('/types/{id}', [TypeController::class, 'typeDestroy']);

//route for vehicule
// List of all vehicule
Route::get('/vehicules', [VehiculeController::class, 'vehiculeIndex']);
// Display one vehicule
Route::get('/vehicules/{id}', [VehiculeController::class, 'vehiculeShow']);
// Add a new vehicule
Route::post('/vehicules', [VehiculeController::class, 'vehiculeStore']);
// Edit a vehicule
Route::put('/vehicules/{id}', [VehiculeController::class, 'vehiculeUpdate']);
// Delete a vehicule
Route::delete('/vehicules/{id}', [VehiculeController::class, 'vehiculeDestroy']);
// Liste of Vehicule for desktop
Route::get('/vehiculesTable', [VehiculeController::class, 'vehiculeTable']);

// Route for Family Situation
// List of all family Situation
Route::get('/family-situations', [FamilySituationController::class, 'familySituationIndex']);
// Display one family situation
Route::get('/family-situations/{id}', [FamilySituationController::class, 'familySituationShow']);
// Add a new family situation
Route::post('/family-situations', [FamilySituationController::class, 'familySituationStore']);
// Edit a family situation
Route::put('/family-situations/{id}', [FamilySituationController::class, 'familySituationUpdate']);
// Delete a family situation
Route::delete('/family-situations/{id}', [FamilySituationController::class, 'familySituationDestroy']);

// Route for Situation profesionnal
// List of all Situation profesionnal
Route::get('/professional-situations', [ProfessionnalSituationController::class, 'ProfessionnalSituationIndex']);
// Display one Situation profesionnal
Route::get('/professional-situations/{id}', [ProfessionnalSituationController::class, 'ProfessionnalSituationShow']);
// Add a new Situation profesionnal
Route::post('/professional-situations', [ProfessionnalSituationController::class, 'ProfessionnalSituationStore']);
// Edit a Situation profesionnal
Route::put('/professional-situations/{id}', [ProfessionnalSituationController::class, 'ProfessionnalSituationUpdate']);
// Delete a Situation profesionnal
Route::delete('/professional-situations/{id}', [ProfessionnalSituationController::class, 'ProfessionnalSituationDestroy']);

// Route for Media
// List of all Media
Route::get('/medias', [MediaController::class, 'mediaIndex']);
// Display one Media
Route::get('/medias/{id}', [MediaController::class, 'mediaShow']);
// Add a new Media
Route::post('/medias', [MediaController::class, 'mediaStore']);
// Edit a Media
Route::put('/medias/{id}', [MediaController::class, 'mediaUpdate']);
// Delete a Media
Route::delete('/medias/{id}', [MediaController::class, 'mediaDestroy']);

// Route for Employee
// List of all Employee
Route::get('/employees', [EmployeeController::class, 'employeeIndex']);
// Display one Employee
Route::get('/employees/{id}', [EmployeeController::class, 'employeeShow']);
// Add a new Employee
Route::post('/employees', [EmployeeController::class, 'employeeStore']);
// Edit a Employee
Route::put('/employees/{id}', [EmployeeController::class, 'employeeUpdate']);
// Delete a Employee
Route::delete('/employees/{id}', [EmployeeController::class, 'employeeDestroy']);

// Route for User
// List of all users
Route::get('/users', [UserController::class, 'userIndex']);
// Display one user
Route::get('/users/{id}', [UserController::class, 'userShow']);
// Add user
Route::post('/users', [UserController::class, 'userStore']);
// Update a user
Route::put('/users/{id}', [UserController::class, 'userUpdate']);
// Delete a user
Route::delete('/users/{id}', [UserController::class, 'userDestroy']);

// Route for Brand
// List of all brand
Route::get('/brands', [BrandController::class, 'brandIndex']);
// Display one brand
Route::get('/brands/{id}', [BrandController::class, 'brandShow']);
// Add brand
Route::post('/brands', [BrandController::class, 'brandStore']);
// Update a brand
Route::put('/brands/{id}', [BrandController::class, 'brandUpdate']);
// Delete a brand
Route::delete('/brands/{id}', [BrandController::class, 'brandDestroy']);

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
Route::get('/leavingVehicules', [LeavingVehiculeController::class, 'leavingVehiculeIndex']);
// Display one leavingVehicule
Route::get('/leavingVehicules/{id}', [LeavingVehiculeController::class, 'leavingVehiculeShow']);
// Add leavingVehicule
Route::post('/leavingVehicules', [LeavingVehiculeController::class, 'leavingVehiculeStore']);
// Update a leavingVehicule
Route::put('/leavingVehicules/{id}', [LeavingVehiculeController::class, 'leavingVehiculeUpdate']);
// Delete a leavingVehicule
Route::delete('/leavingVehicules/{id}', [LeavingVehiculeController::class, 'leavingVehiculeDestroy']);
// Display one leavingVehicule for client
Route::get('/leavingVehicules/client/{id_clients}', [LeavingVehiculeController::class, 'leasingVehiclesByClientId']);

// Route for GearBoxe
// List of all gearBoxe
Route::get('/gearBoxes', [GearBoxeController::class, 'gearBoxeIndex']);
// Display one gearBoxe
Route::get('/gearBoxes/{id}', [GearBoxeController::class, 'gearBoxeShow']);
// Add gearBoxe
Route::post('/gearBoxes', [GearBoxeController::class, 'gearBoxeStore']);
// Update a gearBoxe
Route::put('/gearBoxes/{id}', [GearBoxeController::class, 'gearBoxeUpdate']);
// Delete a gearBoxe
Route::delete('/gearBoxes/{id}', [GearBoxeController::class, 'gearBoxeDestroy']);

// Route for Article
// List of all article
Route::get('/articles', [ArticleController::class, 'articleIndex']);
// Display one article
Route::get('/articles/{id}', [ArticleController::class, 'articleShow']);
// Add article
Route::post('/articles', [ArticleController::class, 'articleStore']);
// Update a article
Route::put('/articles/{id}', [ArticleController::class, 'articleUpdate']);
// Delete a article
Route::delete('/articles/{id}', [ArticleController::class, 'articleDestroy']);

// Route for Subject
// List of all subjects
Route::get('/subjects', [SubjectController::class, 'subjectIndex']);
// Display one subject
Route::get('/subjects/{id}', [SubjectController::class, 'subjectShow']);
// Add subject
Route::post('/subjects', [SubjectController::class, 'subjectStore']);
// Update subject
Route::put('/subjects/{id}', [SubjectController::class, 'subjectUpdate']);
// Delete subject
Route::delete('/subjects/{id}', [SubjectController::class, 'subjectDestroy']);

// Route for Client
// List of all clients
Route::get('/clients', [ClientController::class, 'clientIndex']);
// Display one client
Route::get('/clients/{id}', [ClientController::class, 'clientShow']);
// Add a client
Route::post('/clients', [ClientController::class, 'clientStore']);
// Update a client
Route::put('/clients/{id}', [ClientController::class, 'clientUpdate']);
// Delete a client
Route::delete('/clients/{id}', [ClientController::class, 'clientDestroy']);

// Route for Role
// List of all roles
Route::get('/roles', [RoleController::class, 'roleIndex']);
// Display one role
Route::get('/roles/{id}', [RoleController::class, 'roleShow']);
// Add a role
Route::post('/roles', [RoleController::class, 'roleStore']);
// Update a role
Route::put('/roles/{id}', [RoleController::class, 'roleUpdate']);
// Delete a role
Route::delete('/roles/{id}', [RoleController::class, 'roleDestroy']);

// Route for Energie
// List of all energies
Route::get('/energies', [EnergieController::class, 'energieIndex']);
// Display one energie
Route::get('/energies/{id}', [EnergieController::class, 'energieShow']);
// Add a energie
Route::post('/energies', [EnergieController::class, 'energieStore']);
// Update a energie
Route::put('/energies/{id}', [EnergieController::class, 'energieUpdate']);
// Delete a energie
Route::delete('/energies/{id}', [EnergieController::class, 'energieDestroy']);

// Route for Model car
// List of all modele car
Route::get('/models', [ModelCarController::class, 'modelIndex']);
// Display one modele car
Route::get('/models/{id}', [ModelCarController::class, 'modelShow']);
// Add a modele car
Route::post('/models', [ModelCarController::class, 'modeleStore']);
// Update a modele car
Route::put('/models/{id}', [ModelCarController::class, 'modelUpdate']);
// Delete a modele car
Route::delete('/models/{id}', [ModelCarController::class, 'modelDestroy']);
