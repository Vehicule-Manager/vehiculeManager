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
        $users = User::where('id', '!=', 1)->get();
        $creditInfos = CreditInfo::all();

        return [
            'civility' => $this->faker->lexify('???'),
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'birthDate' => $this->faker->dateTime(),
            'address' => $this->faker->address(),
            'optionalAddress' => $this->faker->word(),
            'zipCode' => $this->faker->randomNumber(5, true),
            'city' => $this->faker->city(),
            'id_users' => $users->isEmpty() ? 1 : $users->random()->id,
            'id_creditInfos' => $creditInfos->isEmpty() ? 1 : $creditInfos->random()->id,
        ];
    }
}
