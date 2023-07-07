<?php

namespace Database\Factories;

use App\Models\FamilySituation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FamilySituationFactory extends Factory
{

    protected $model = FamilySituation::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'numberOfChild' => $this->faker->randomDigit(),
        ];
    }
}
