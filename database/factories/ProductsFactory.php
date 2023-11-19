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
        $randomNums = $faker->numberBetween(1, 100);
        $randomPrice = $faker->numberBetween(1, 1000);
        $randomSale = rand(0, 1) ? null : $faker->numberBetween(1, 1000);

        return [
            'name' => $randomText,
            'slug' => $faker->slug,
            'description' => $faker->paragraph,
            'img' => $faker->imageUrl,
            "price" => $randomPrice,
            "sale" => $randomSale,
            'amount' => $randomNums,
            'likes' => $randomNums,
            "category_id" => Category::inRandomOrder()->first()->id,
        ];
    }
}
