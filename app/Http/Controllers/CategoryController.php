<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $category_id = $request->input("category_id");
        $category_products = Products::where("category_id", $category_id)->get();

        return view("category")
            ->with("Products", $category_products);
    }
}
