<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getProducts()
    {
        $data = Products::limit(15)->get();

        return response()->json([
            "products" => $data
        ]);
    }
}
