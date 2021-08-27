<?php

namespace Database\Factories;

use App\Models\Carriage;
use App\Models\Price;
use Illuminate\Database\Eloquent\Factories\Factory;

class PriceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Price::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => $this->faker->numberBetween(1, 200),
            'carriage_id' => Carriage::all()->random()->id,
            'type' => 'cv'
        ];
    }
}
