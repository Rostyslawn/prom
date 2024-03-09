<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class addToCart extends Controller
{
    public function addToCart(Request $request)
    {
        if(!session("user")) return response()->json(["error" => "You are not logged in"]);

        $user_id = session("user")->id;
        $product_id = $request->input("product_id");

        $product = new Cart();
        $product->user_id = $user_id;
        $product->product_id = $product_id;
        $product->save();

        return response()->json(["success" => "success"]);
    }
}
