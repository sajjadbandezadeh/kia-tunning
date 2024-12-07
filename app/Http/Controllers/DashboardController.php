<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Morilog\Jalali\Jalalian;

class DashboardController extends Controller
{
    public function index()
    {
        $orders = Order::with('car')->get();
        $orders = $orders->map(function ($order) {
            $order->created_date = Jalalian::fromDateTime($order->created_at)->format('%A, %d %B %y');
            $order->created_time = Jalalian::fromDateTime($order->created_at)->format('H:i');
            return $order;
        });
        return view('dashboard')->with('orders',$orders);
    }

    public function update($id)
    {
        $order = Order::findOrFail($id);
        $order->status = true;
        $order->save();
        return redirect()->back()->with('success', 'وضعیت سفارش با موفقیت به تکمیل شد تغییر کرد.');
    }
}
