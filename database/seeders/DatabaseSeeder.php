<?php

namespace Database\Seeders;

use App\Models\Carriage;
use App\Models\City;
use App\Models\Price;
use App\Models\Route;
use App\Models\Station;
use App\Models\Train;
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
         \App\Models\User::factory(10)->create();
         City::factory(100)->create();
         Train::factory(100)->create();
         Carriage::factory(100)->create();
         Station::factory(100)->create();
         Route::factory(100)->create();
         Price::factory(100)->create();
    }
}
