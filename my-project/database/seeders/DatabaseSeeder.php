<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;
use App\Models\CreditInfo;
use App\Models\Brand;
use App\Models\Energie;
use App\Models\GearBoxe;
use App\Models\Status;
use App\Models\User;
use App\Models\Role;
use App\Models\Client;
use App\Models\Vehicule;
use App\Models\Subject;
use App\Models\Media;
use App\Models\Appointment;
use App\Models\Employee;
<<<<<<< HEAD
use App\Models\LeavingVehicule;
use App\Models\Article;
use App\Models\VehiculeByArticle;
=======
use App\Models\FamilySituation;
use App\Models\ProfessionnalSituation;
>>>>>>> 1bd15c5 (modify seeder)

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        CreditInfo::factory(5)->create();
        Type::factory(5)->create();
        Brand::factory(5)->create();
        GearBoxe::factory(5)->create();
        Status::factory(5)->create();
        Energie::factory(5)->create();
        Role::factory(5)->create();
        User::factory(5)->create();
        Client::factory(5)->create();
        Vehicule::factory(5)->create();
        Subject::factory(5)->create();
        Media::factory(5)->create();
        Employee::factory(5)->create();
        Appointment::factory(5)->create();
<<<<<<< HEAD
        LeavingVehicule::factory(5)->create();
        Article::factory(5)->create();
        VehiculeByArticle::factory(5)->create();
=======
        FamilySituation::factory(5)->create();
        ProfessionnalSituation::factory(5)->create();
>>>>>>> 1bd15c5 (modify seeder)
    }
}
