<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MostPopularProducts;
use App\Models\Products;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
//        $mostPopularProducts = mostPopularProducts::limit(30)
//            ->leftJoin("categories", "categories.id", "most_popular_products.category_id")
//            ->select("most_popular_products.*", "categories.name as category_name")
//            ->get();

        $products = Products::// inRandomOrder()
        leftJoin("categories", "categories.id", "products.category_id")
            ->select("products.*", "categories.name as category_name")
            ->distinct()
            ->get();

        $productsGrouped = $products->groupBy('category_id');

        $categories = Category::limit(10)->get();

        return view('index')
            ->with("Categories", $categories)
            ->with("AllProducts", $products)
            ->with('AllProductsGrouped', $productsGrouped);
    }
}
