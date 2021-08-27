<?php

namespace Database\Factories;

use App\Models\Route;
use App\Models\Station;
use App\Models\Train;
use Illuminate\Database\Eloquent\Factories\Factory;

class RouteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Route::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'train_id' => Train::all()->random()->id,
            'departure_station' => Station::all()->random()->id,
            'arrival_station' => Station::all()->random()->id,
            'departure_time' => $this->faker->dateTime(now()),
            'arrival_time' => $this->faker->dateTime(now()),
            'road_time' => $this->faker->dateTime(now()),
        ];
    }
}
