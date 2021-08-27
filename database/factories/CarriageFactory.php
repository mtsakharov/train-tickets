<?php

namespace Database\Factories;

use App\Models\Carriage;
use App\Models\Train;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarriageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Carriage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number' => $this->faker->numberBetween(1,50),
            'train_id' => Train::all()->random()->id
        ];
    }
}
