<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Brand;
use App\Models\Client;
use App\Models\Energie;
use App\Models\GearBoxe;
use App\Models\Status;
use App\Models\Type;

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
        return [
            'new' => $this->faker->boolean(),
            'firstDateCicrulate' => $this->faker->date('Y_m_d'),
            'description' => $this->faker->text(100),
            'horsepower' => $this->faker->randomNumber(3),
            'price' => $this->faker->randomNumber(4,5),
            'enterDate' => $this->faker->date('Y_m_d'),
            'leavingDate' => $this->faker->date('Y_m_d'),
            'immatriculation' => $this->faker->numerify('##########'),
            'id_statuses' => Status::all()->random()->id,
            'id_clients' => Client::all()->random()->id,
            'id_gear_boxes' => GearBoxe::all()->random()->id,
            'id_brands' => Brand::all()->random()->id,
            'id_energies' => Energie::all()->random()->id,
            'id_types' => Type::all()->random()->id,
        ];
    }
}
