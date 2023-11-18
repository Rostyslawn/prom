<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Creating faker
        $faker = \Faker\Factory::create();
        $randomText = $faker->sentence($nbWords = 3, $variableNbWords = true);
        $randomNums = $faker->numberBetween(1, 60);

        // Write random names for table Category and write random sort
        return [
            "name" => $randomText,
            "sort" => $randomNums,
        ];
    }
}
