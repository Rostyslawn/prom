<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getProducts()
    {
        $data = Products::limit(15)->get();
        $session_user = false;

        if(session("user")) $session_user = true;

        return response()->json([
            "products" => $data,
            "session_user" => $session_user,
        ]);
    }
}
