<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::resource('products', ProductController::class);

// Route::get('/products', [ProductController::class, 'index']);
// Route::post('/products', [ProductController::class, 'store']);

// Route::post('/products', function () {
//     return Product::create([
//         'name' => 'Product One',
//         'slug' => 'product-one',
//         'description' => 'This is product one',
//         'price' => '99.99'
//     ]);
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
