<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class deleteFromCartController extends Controller
{
    public function deleteFromCart(Request $request)
    {
        if (!session("user")) return redirect()->back();

        $product_id = $request->input("product_id");
        $cart = Cart::where("product_id", $product_id)->delete();

        return back();
    }
}
