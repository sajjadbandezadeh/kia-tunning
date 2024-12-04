<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function getOrders(Request $request)
    {
        $orders = Order::with('car')->where('contact', '=', $request->phone)->get();
        return response()->json([
            'orders' => $orders,
        ]);
    }
}
