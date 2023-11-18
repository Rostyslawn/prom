<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MostPopularProducts>
 */
class MostPopularProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Creating faker
//        $faker = \Faker\Factory::create();
//        $randomText = $faker->sentence($nbWords = 3, $variableNbWords = true);
//        $randomNums = $faker->numberBetween(1, 60);
//        $randomSale = rand(0, 1) ? null : $randomNums;
//
//        // Write random names for table Category and write random sort
//        return [
//            "product_name" => $randomText,
//            "img" => $faker->imageUrl,
//            "price" => $randomNums,
//            "sale" => $randomSale,
//            "category_id" => Category::inRandomOrder()->first()->id,
//        ];
        return [
            "category_id" => Category::inRandomOrder()->first()->id,
        ];
    }
}
