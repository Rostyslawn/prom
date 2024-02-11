<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        if(!session("user")) return redirect()->back();

        $user_data = session("user");
        $product_data = [];
        $cart = Cart::where("user_id", $user_data->id)->get();

        foreach ($cart as $el) {
            $product_data[] = Products::where("id", $el->product_id)->first();
        }

        return view("cart")
            ->with("cart", $product_data);
    }
}
