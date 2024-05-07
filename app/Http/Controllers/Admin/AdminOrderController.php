<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Enums\OrderStatue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminOrderController extends Controller
{
    //
    public function index() {
        return view('admin.pages.orders.index',[
            'orders' => Order::get()
        ]);
    }

    public function show(Order $order) {
        return view('admin.pages.orders.show',[
            'items' => $order->orderItems,
        ]);
    }
    
    public function send(Order $order) {
        $order->state = OrderStatue::SHIPPED->value;
        $order->save();
        return back();
    }
}
