<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sellers>
 */
class SellersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();

        return [
            "img" => $faker->imageUrl,
            "name" => $faker->company,
            "rating" => $faker->numberBetween(0,10),
            "reviews" => $faker->numberBetween(0, 1000),
        ];
    }
}
