<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
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
        $randomNums = $faker->numberBetween(1, 60);
        $randomSale = rand(0, 1) ? null : $randomNums;

        return [
            'name' => $randomText,
            'slug' => $faker->slug,
            'description' => $faker->paragraph,
            'img' => $faker->imageUrl,
            "price" => $randomNums,
            "sale" => $randomSale,
            'amount' => $randomNums,
            'likes' => $randomNums,
            "category_id" => Category::inRandomOrder()->first()->id,
        ];
    }
}
