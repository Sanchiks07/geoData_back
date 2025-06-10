<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\City;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Country::factory()->count(5)->create();
        City::factory()->count(20)->create();
    }
}
