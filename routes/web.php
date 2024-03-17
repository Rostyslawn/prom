<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use \App\Http\Controllers\RegController;
use \App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use \App\Http\Controllers\addToCart;
use \App\Http\Controllers\AjaxController;
use \App\Http\Controllers\deleteFromCartController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\buyProduct;
use \App\Http\Controllers\LogoffController;
use \App\Http\Controllers\FilterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, "index"])->name("index");
Route::get('/product', [ProductController::class, "index"])->name("product");
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::post("/deleteFromCart", [deleteFromCartController::class, 'deleteFromCart'])->name('deleteFromCart');

// AJAX
Route::name("ajax.")->prefix("ajax/")->group(function () {
    Route::match(["post", "get"], '/getproducts', [AjaxController::class, 'getProducts'])->name('getproducts');
    Route::post("/addToCart", [addToCart::class, 'addToCart'])->name('addToCart');
    Route::post("/auth", [AuthController::class, "auth"])->name("auth");
    Route::match(["post", "get"], '/logoff', [LogoffController::class, "logoff"])->name("logoff");
    Route::post("/registration", [RegController::class, "reg"])->name("reg");
    Route::post("/buyproduct", [buyProduct::class, "buy"])->name("buy");
    Route::post("/filter", [FilterController::class, "filter"])->name("filter");
});
