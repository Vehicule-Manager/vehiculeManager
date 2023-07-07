<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;
use App\Models\Client;
use App\Models\Subject;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{

    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date_and_hour' => $this->faker->date('Y_m_d'),
            'description' => $this->faker->word(10, true),
            'id_employees' => Employee::all()->random()->id,
            'id_clients' => Client::all()->random()->id,
            'id_subjects' => Subject::all()->random()->id,
        ];
    }
}
