<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $allProducts = Products::all();
        return view('index')
            ->with('allProducts', $allProducts);
    }
}
