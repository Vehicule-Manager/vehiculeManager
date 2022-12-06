<?php

namespace Database\Seeders;

<<<<<<< Updated upstream
use App\Models\CreditInfo;
=======
>>>>>>> Stashed changes
use Illuminate\Database\Seeder;
use App\Models\Type;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< Updated upstream
        CreditInfo::factory(5)->create();
=======
        Type::factory(5)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
>>>>>>> Stashed changes
    }
}
