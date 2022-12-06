<?php

namespace Database\Seeders;

use App\Models\CreditInfo;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        CreditInfo::factory(5)->create();
    }
}
