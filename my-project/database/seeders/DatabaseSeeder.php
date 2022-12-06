<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\Client;
use Illuminate\Database\Seeder;
use App\Models\Type;
use App\Models\CreditInfo;
use App\Models\Brand;
use App\Models\Energie;
use App\Models\GearBoxe;
use App\Models\Status;

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
        Type::factory(5)->create();
        Brand::factory(5)->create();
        GearBoxe::factory(5)->create();
        Status::factory(5)->create();
        Energie::factory(5)->create();
        Role::factory(5)->create();
        User::factory(5)->create();
        Client::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
