<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Status;
use App\Models\Vehicule;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'id_statuses' => Status::all()->random()->id,
            'id_clients' => Client::all()->random()->id,
            'id_vehicules' => Vehicule::all()->random()->id,
        ];
    }
}
