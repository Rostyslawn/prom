<?php

namespace Database\Seeders;

use App\Models\mostPopularProducts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MostPopularProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        mostPopularProducts::factory()->times(100)->create();
    }
}
