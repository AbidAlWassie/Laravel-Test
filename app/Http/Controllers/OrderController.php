<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
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

        return view('orders', [
            'orders' => $order,
        ]);
    }

    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}
