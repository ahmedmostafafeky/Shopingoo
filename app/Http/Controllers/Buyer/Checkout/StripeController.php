<?php

namespace App\Http\Controllers\Buyer\Checkout;

use Stripe\Stripe;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StripeController extends Controller
{

    public function stripe(Order $order) {

        Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'egp',
                        'product_data' => [
                            'name' => " Order Number: {$order->id}",
                        ],
                        'unit_amount' => $order->transaction->amount * 100,
                    ],
                    'quantity' => 1 ,
                ],
            ],
            'mode' => 'payment',
            'success_url' => "http://localhost:8000/checkout/pay/cridet/after",
            'cancel_url' => "http://localhost:8000/",
        ]);

        return redirect()->away($session->url);
    }

}
