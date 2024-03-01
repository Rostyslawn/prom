<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $category_id = $request->input("category_id");
        $categories = Category::all();
        $category = Category::where("id", $category_id)->first();
        $category_name = $category->name;
        $category_products = Products::where("category_id", $category_id)->get();

        $bread_id = [];
        $bread_name = [];

        $parent_id = $category_id;

        {
            $i = 0;

            do {
                $parent_id = $categories[$parent_id - 1]->parent_id ?? null;
                $bread_id[] = $parent_id;

                $i++;
            } while ($parent_id && $i < 6);
        }

        foreach ($bread_id as $id) {
            if (!$id)
                $bread_name[] = $categories->where("id", $category_id)->first();
            else
                $bread_name[] = $categories->where("id", $id)->first();
        }

        return view("category")
            ->with("categoryName", $category_name)
            ->with("bread", $bread_name)
            ->with("products", $category_products);
    }
}
