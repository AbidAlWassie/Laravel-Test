<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {

        $orders = Order::all();

        return view('orders.orders', [
            'orders' => $orders,
        ]);
    }

    public function show($id)
    {
        return view('orders.details', ['id' => $id]);
    }
}
