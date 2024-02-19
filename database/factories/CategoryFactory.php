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
        $faker = \Faker\Factory::create();
        $randomText = $faker->sentence($nbWords = 3, $variableNbWords = true);
        $randomNums = $faker->numberBetween(1, 100);

        $randomParentId = rand(0, 1) ? null : $faker->numberBetween(1, 100);

        return [
            "name" => $randomText,
            "sort" => $randomNums,
            "parent_id" => $randomParentId,
        ];
    }
}
