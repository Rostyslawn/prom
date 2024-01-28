<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Sellers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request) {
        $product_name = $request->input("product_name");
        $product_data = Products::where("name", $product_name)->first();
        $sellers_data = Sellers::where("name", $product_data->seller)->first();
        $products = Products::// inRandomOrder()
            leftJoin("categories", "categories.id", "products.category_id")
            ->select("products.*", "categories.name as category_name")
            ->distinct()
            ->get();
        $another_products = $products->groupBy('category_id');

        return view('product')
            ->with("sellers_data", $sellers_data)
            ->with("product_data", $product_data)
            ->with("another_products", $another_products);
    }
}
