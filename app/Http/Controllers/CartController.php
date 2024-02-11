<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $username = $request->input("username");
        $cart = Cart::where("username", $username)->get();
        $product_data = [];

        foreach ($cart as $el) {
            $product_data[] = Products::where("id", $el->product_id)->first();
        }

        return view("cart")
            ->with("cart", $product_data);
    }
}
