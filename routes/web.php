<?php

use App\Models\Material;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//    $meterial = Material::find(1);
//    $meterial->products()->attach([1,2]);
// });

// Route::get('/', function () {
//    $products = Product::find(1);
//    $products->getmetarial()->attach([1,2]);
// });

Route::get('/', function () {
    $meterial = Material::with('products')->get();
    dd( $meterial->toArray());
});


// Route::get('/', function () {
//     $product = Product::with('getmetarial')->get();
//     dd( $product->toArray());
// });
