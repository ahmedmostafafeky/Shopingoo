<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Helpers\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index() {

        $user = Helpers::getUserType();

        $userType = Helpers::getUserType();
        $user = Auth::guard($userType)->user();

        $products = Product::all();

        $items = [];

        foreach($products as $product) {
            $item = $product->orderItem;
            if($item->isNotEmpty())
                $items[] = $item;
        }
        
        $statistics = [
            'totalProfit' => 0,
            'salesCount' => 0,
            'productCount' => 0,  
            'totalCost' => 0,  
            'totalSales' => 0,     
        ];
        
        foreach($items as $itemGroub) {
            foreach($itemGroub as $item) {
                if($item->state == 'delivered') {
                    $price = $item->price;
                    $cost = $item->product->cost;
                    $amount = $item->amount;
                    $statistics['totalProfit'] += ( $price - $cost ) * $amount;
                    $statistics['totalSales'] += $price * $amount;
                    $statistics['totalCost'] += $cost * $amount;
                    $statistics['salesCount']++;
                    $statistics['productCount'] += $amount;
                }
            }
        }
        $statistics['plateformProfit'] = $statistics['totalProfit']*.25;
        $statistics['SellersProfit'] = $statistics['totalProfit'] -  $statistics['plateformProfit'];

        return view('admin.home',[
            'statistics' => $statistics
        ]);
    }
}
