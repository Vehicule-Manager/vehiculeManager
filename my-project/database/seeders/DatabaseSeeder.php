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
use App\Models\LeavingVehicule;
use App\Models\Article;
use App\Models\VehiculeByArticle;
use App\Models\FamilySituation;
use App\Models\ProfessionnalSituation;
use App\Models\ModelCar;
use Database\Factories\StatusFactory;

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

        // Seeder Type de véhicule
        $types = array("Berline", "Citadine", "Suv", "Utilitaire", "Sportive");
        foreach ($types as $name) {
            $create = new Type;
            $create->name = $name;
            $create->save();
        }

        // Seeder Marque de voiture
        $brands = array("Renault", "Peugeot", "Citroen", "Opel", "BMW", "Mercedes", "Ford", "Fiat", "Volkswagen", "Audi");
        foreach ($brands as $name) {
            $create = new Brand;
            $create->name = $name;
            $create->save();
        }

        // Seeder boite de vitesse
        $gearBoxes = array("automatique", "manuelle");
        foreach ($gearBoxes as $name) {
            $create = new GearBoxe;
            $create->name = $name;
            $create->save();
        }

        // Seeder Status vehicule
        $status = array("Vente", "LOA", "LLD", "Location");
        foreach ($status as $name) {
            $create = new Status;
            $create->name = $name;
            $create->save();
        }

        // Seeder Energie des vehicules
        $energies = array("Gazoil", "Essence", "Electrique", "Hybride");
        foreach ($energies as $name) {
            $create = new Energie;
            $create->name = $name;
            $create->save();
        }

        // Seeder Role
        $roles = array("Administrateur", "Employé", "Client");
        foreach ($roles as $name) {
            $create = new Role;
            $create->name = $name;
            $create->save();
        }

        User::factory(5)->create();
        Client::factory(5)->create();

        // Seeder Modele de voiture
        $modelCars = array("scenic", "clio", "megane", "208", "3008", "508", "c4", "c5", "c2", "corsa", "320d", "serie1", "fiesta", "golf", "polo", "tirok", "a3", "a4",);
        foreach ($modelCars as $name) {
            $create = new ModelCar;
            $create->name = $name;
            $create->save();
        }

        Vehicule::factory(5)->create();
        Subject::factory(5)->create();
        Media::factory(5)->create();
        Employee::factory(5)->create();
        Appointment::factory(5)->create();
        LeavingVehicule::factory(5)->create();
        Article::factory(5)->create();
        VehiculeByArticle::factory(5)->create();
        FamilySituation::factory(5)->create();
        ProfessionnalSituation::factory(5)->create();
    }
}
