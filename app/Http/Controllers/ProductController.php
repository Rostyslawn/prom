<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use App\Models\Sellers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request) {
        $product_name = $request->input("product_name");
        $categories = Category::all();
        $product_data = Products::where("name", $product_name)->first();
        $sellers_data = Sellers::where("name", $product_data->seller)->first();
        $products = Products::// inRandomOrder()
            leftJoin("categories", "categories.id", "products.category_id")
            ->select("products.*", "categories.name as category_name")
            ->distinct()
            ->get(50);
        $another_products = $products->unique("id")->shuffle()->take(20);

        $parent_id = $product_data->category_id;
        $bread_id = [];
        $bread_name = [];

        do {
            $i = 0;

            $parent_id = $categories[$parent_id-1]->parent_id ?? null;
            $bread_id[] = $parent_id;
        } while ($parent_id && $i++ < 8);

        foreach ($bread_id as $id) {
            if(!$id)
                $bread_name[] = $categories->where("id", $product_data->category_id)->first();
            else
                $bread_name[] = $categories->where("id", $id)->first();
        }

        return view('product')
            ->with("bread", $bread_name)
            ->with("sellers_data", $sellers_data)
            ->with("product_data", $product_data)
            ->with("another_products", $another_products);
    }
}
