<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\CreditInfo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'civility' => $this->faker->lexify('???'),
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'birthDate' => $this->faker->dateTime(),
            'address' => $this->faker->address(),
            'optionalAddress' => $this->faker->word(),
            'zipCode' => $this->faker->randomNumber(5, true),
            'city' => $this->faker->city(),
            'id_users' => User::all()->random()->id,
            'id_creditInfos' => CreditInfo::all()->random()->id,
            //
        ];
    }
}
