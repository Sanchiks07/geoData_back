<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->unique()->country(),
            "area_km2" => $this->faker->randomFloat(2, 10000, 17000000), // 10 tūkst. līdz 17 milj. km2
            "population" => $this->faker->numberBetween(500000, 1400000000), // 0.5 milj. līdz 1.4 mljrd.
        ];
    }
}