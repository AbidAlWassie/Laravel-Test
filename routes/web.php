<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/orders', function () {
    // get the data from db
    $order = [
        [
            'type' => 'hawiian',
            'base' => 'cheesy crust',
            'price' => 18
        ],
        [
            'type' => 'volcano',
            'base' => 'garlic crust',
            'price' => 10
        ],
        [
            'type' => 'veg suprime',
            'base' => 'thin & crispy',
            'price' => 7
        ],
    ];
    return view('orders', ['orders' => $order]);
});
