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
//        $randomNums = $faker->numberBetween(1, 100);
        $randomPrice = $faker->numberBetween(1, 1000);
        $randomSale = rand(0, 1) ? null : $faker->numberBetween(1, 1000);

        return [
            'name' => $randomText,
            'slug' => $faker->slug,
            'description' => $faker->realTextBetween(300, 600),
            'seller' => $faker->sentence($nbWords = 3, $variableNbWords = true),
            'country_of_origin' => $faker->country,
            'img' => $faker->imageUrl,
            "price" => $randomPrice,
            "sale" => $randomSale,
            'amount' => $faker->numberBetween(1, 100),
            'likes' => $faker->numberBetween(1, 100),
            "category_id" => Category::inRandomOrder()->first()->id,
        ];
    }
}
