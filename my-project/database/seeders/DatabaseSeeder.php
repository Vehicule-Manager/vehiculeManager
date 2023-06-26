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

        $admin = new User();
        $admin->login = "AdminName";
        $admin->mail = "admin@test.fr";
        $admin->password = bcrypt("Vehicle80!");
        $admin->id_roles = "1";
        $admin->mailVerified = "0";
        $admin->save();

        User::factory(15)->create();
        Client::factory(5)->create();

        // Seeder Modele de voiture
        $modelCars = [
            ["name"=> 'scenic', 'id_brands'=> '1'],
            ["name"=> 'clio', 'id_brands'=> '1'],
            ["name"=> 'megane', 'id_brands'=> '1'],
            ["name"=> '208', 'id_brands'=> '2'],
            ["name"=> '3008', 'id_brands'=> '2'],
            ["name"=> '508', 'id_brands'=> '2'],
            ["name"=> 'c4', 'id_brands'=> '3'],
            ["name"=> 'c5', 'id_brands'=> '3'],
            ["name"=> 'c2', 'id_brands'=> '3'],
            ["name"=> 'corsa', 'id_brands'=> '4'],
            ["name"=> '320d', 'id_brands'=> '5'],
            ["name"=> 'serie1', 'id_brands'=> '5'],
            ["name"=> 'fiesta', 'id_brands'=> '7'],
            ["name"=> 'golf', 'id_brands'=> '9'],
            ["name"=> 'polo', 'id_brands'=> '9'],
            ["name"=> 'tirok', 'id_brands'=> '9'],
            ["name"=> 'a3', 'id_brands'=> '10'],
            ["name"=> 'a4', 'id_brands'=> '10']
        ];
        foreach ($modelCars as $name) {
            $create = new ModelCar;
            $create->name = $name['name'];
            $create->id_brands= $name['id_brands'];
            $create->save();
        }
//        ModelCar::factory(5)->create();
        Vehicule::factory(50)->create();
        Subject::factory(5)->create();
        Media::factory(5)->create();
        Employee::factory(5)->create();
        Appointment::factory(5)->create();
        LeavingVehicule::factory(5)->create();
        Article::factory(25)->create();
        VehiculeByArticle::factory(15)->create();
        FamilySituation::factory(5)->create();
        ProfessionnalSituation::factory(5)->create();
    }
}
