<?php

namespace App\Http\Controllers\Seller;

use App\Models\Order;
use App\Models\Product;
use App\Models\Order_item;
use App\Enums\OrderStatue;
use Illuminate\Http\Request;
use App\Http\Helpers\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SellerOrderController extends Controller
{
    public function index() {
        $user = Helpers::getUserType();

        $userType = Helpers::getUserType();
        $user = Auth::guard($userType)->user();

        $products = $user->products;

        $items = [];

        foreach($products as $product) {
            $item = $product->orderItem;
            if($item->isNotEmpty())
                $items[] = $item;
        }

        
        return view('web.seller-account.orders.index',[
            'items' => $items
        ]);
    }

    public function send(Order_item $item) {
        $item->state = 'sent';
        $item->save();
        $item->product->amount--;
        $item->product->save();
        return back();
    }
}
