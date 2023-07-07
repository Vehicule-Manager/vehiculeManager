<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Energie;
use App\Models\GearBoxe;
use App\Models\ModelCar;
use App\Models\Status;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicule>
 */
class VehiculeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $randomModelCar = ModelCar::all()->random();

        return [
            'new' => $this->faker->boolean(),
            'firstDateCicrulate' => $this->faker->date('Y_m_d'),
            'description' => $this->faker->text(100),
            'horsepower' => $this->faker->randomNumber(3),
            'price' => $this->faker->randomNumber(4, 5),
            'enterDate' => $this->faker->date('Y_m_d'),
            'leavingDate' => $this->faker->date('Y_m_d'),
            'immatriculation' => $this->faker->numerify('##########'),
            'id_statuses' => Status::all()->random()->id,
            'id_clients' => Client::all()->random()->id,
            'id_gear_boxes' => GearBoxe::all()->random()->id,
            'id_brands' => $randomModelCar->id_brands,
            'id_energies' => Energie::all()->random()->id,
            'id_types' => Type::all()->random()->id,
            'id_model_car' => $randomModelCar->id,
        ];
    }
}
