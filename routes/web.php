<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use \App\Http\Controllers\RegController;
use \App\Http\Controllers\ProductController;
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
Route::post('/auth', [AuthController::class, 'auth'])->name("auth");
Route::post('/registration', [RegController::class, 'reg'])->name("reg");
Route::get('/product', [ProductController::class, "index"])->name("product");
// to-do all routes
//Route::get('/likes', [PageController::class, 'index'])->name('likes');
//Route::get('/cart', [PageController::class, 'index'])->name('cart');
