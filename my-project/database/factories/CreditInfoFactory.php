<?php

namespace Database\Factories;

use App\Models\CreditInfo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CreditInfoFactory extends Factory
{

    protected $model = CreditInfo::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'placeOfBirth' => $this->faker->city(),
            'nationality' => $this->faker->country(),
            'budgets' => $this->faker->randomNumber(4, 6),
            'contract' => $this->faker->word(1, true),
            'contractDate' => $this->faker->date('Y_m_d'),
            'banquet' => $this->faker->word(),
            'professionnalStatus' => $this->faker->word(),
            'familySituation' => $this->faker->word(),

        ];
    }
}
