<?php

namespace App\Http\Controllers;

use App\Models\mostPopularProducts;
use App\Models\Products;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
//        $mostPopularProducts = mostPopularProducts::limit(30)
//            ->leftJoin("categories", "categories.id", "most_popular_products.category_id")
//            ->select("most_popular_products.*", "categories.name as category_name")
//            ->get();
//        dd($mostPopularProducts);


        return view('index')
            ->with('mostPopularProducts', $mostPopularProducts);
    }
}
