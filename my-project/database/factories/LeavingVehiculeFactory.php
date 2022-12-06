<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;
use App\Models\Vehicule;

class LeavingVehiculeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'leavingDate' => $this->faker->date('Y_m_d'),
            'renderDate' => $this->faker->date('Y_m_d'),
            'contract' => $this->faker->word(),
            'id_clients' => Client::all()->random()->id,
            'id_vehicules' => Vehicule::all()->random()->id,
        ];
    }
}
