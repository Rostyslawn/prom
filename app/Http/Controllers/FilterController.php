<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filter(Request $request)
    {
        $category_id = $request->input("category_id");
        $products = new Products();
        $products = $products->where("category_id", $category_id);

        if($request->has("instock")) {
            $products = $products->where("amount", ">", 0);
        }

        if($request->has("sale")) {
            $products = $products->whereNotNull("sale");
        }

        if($request->has("price-min")) {
            $products = $products->where("price", ">=", $request->input("price-min"));
        }

        if($request->has("price-max")) {
            $products = $products->where("price", "<=", $request->input("price-max"));
        }

        $products = $products->limit(20)->get()->toArray();

        return response()->json(["data" => $products]);
    }
}
