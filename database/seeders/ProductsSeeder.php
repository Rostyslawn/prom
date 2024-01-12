<?php

namespace Database\Seeders;

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

//        DB::statement("truncate table products");
//
//        for($i = 0; $i < 10; $i++) {
//            DB::table('products')->insert([
//                ['name' => 'product ' . $i, 'description' => 'just a product', 'img' => 'govno.jpg', 'price' => $i, 'sale' => $i-1, 'amount' => 1, 'likes' => 0]
//            ]);
//        }
    }
}
