<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class buyProduct extends Controller
{
    public function buy(Request $request)
    {
        if(!session("user")) return response()->json(["error" => "You are not logged in"]);

        $user_id = session('user')->id;
        $product_id = $request->product_id;

        // some code to pay for product

        return response()->json("product successfully purchased");
    }
}
