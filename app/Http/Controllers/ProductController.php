<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request) {
        $product_name = $request->input("product_name");

        $product_data = Products::where("name", $product_name)->first();

        return view('product')
            ->with("product_data", $product_data);
    }
}
