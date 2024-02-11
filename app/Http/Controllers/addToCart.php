<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class addToCart extends Controller
{
    public function addToCart(Request $request)
    {
        $username = $request->input("username");
        $product_id = $request->input("product_id");

        $product = new Cart();
        $product->username = $username;
        $product->product_id = $product_id;
        $product->save();

        return back();
    }
}
