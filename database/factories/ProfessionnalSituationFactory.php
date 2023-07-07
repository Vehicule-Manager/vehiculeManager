<?php

namespace Database\Factories;

use App\Models\ProfessionnalSituation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProfessionnalSituation>
 */
class ProfessionnalSituationFactory extends Factory
{
    protected $model = ProfessionnalSituation::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(7, true),
        ];
    }
}
