<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarPart;
use App\Models\Order;
use App\Models\TunnedCar;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function GetCar($id)
    {
        $car = Car::find($id);
        return $car;
    }

    public function submitOrder(Request $request)
    {
        $contact = $request->input('contact');
        $options = $request->input('options');
        $amount = $request->input('amount');
        $order = new Order();
        $order->cars_id = $request->input('id');
        $order->contact = $contact;
        $order->amount = $amount;
        $order->save();
        foreach ($options as $option) {
            $item = CarPart::where("attribute", '=', $option)->first();
            if ($item) {
                $order_items = new TunnedCar();
                $order_items->orders_id = $order->id;
                $order_items->car_parts_id = $item->id;
                $order_items->save();
            } else {
                return response()->json(['status' => false, 'message' => 'One or more car parts do not exist.']);
            }
        }

        return response()->json(['status' => true, 'message' => 'سفارش شما ثبت شد.']);
    }
}
