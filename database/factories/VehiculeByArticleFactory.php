<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Vehicule;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculeByArticleFactory extends Factory
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
            'id_articles' => Article::all()->random()->id,
        ];
    }
}
