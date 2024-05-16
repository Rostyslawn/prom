<?php

namespace Database\Seeders;

use App\Models\MostPopularProducts;
use App\Models\Products;
use App\Models\Sellers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sellers::factory()->times(30)->create();
        Products::factory()->times(1000)->create();
        MostPopularProducts::factory()->times(100)->create();
    }
}
