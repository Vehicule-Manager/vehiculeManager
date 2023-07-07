<?php

namespace Database\Factories;

use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;
use App\Models\Vehicule;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{

    protected $model = Media::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'link' => $this->faker->url(),
            'name' => $this->faker->word(10, true),
            'type' => $this->faker->word(10, true),
            'id_clients' => Client::all()->random()->id,
            'id_vehicules' => Vehicule::all()->random()->id,
        ];
    }
}
