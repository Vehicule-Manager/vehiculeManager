<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Vehicule;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculeByClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_vehicules' => Vehicule::all()->random()->id,
            'id_clients' => Client::all()->random()->id,
        ];
    }
}
