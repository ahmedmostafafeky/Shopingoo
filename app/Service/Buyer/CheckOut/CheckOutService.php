<?php 

namespace App\Service\Buyer\CheckOut;

use App\Models\Order;
use App\Models\Cart_item;
use App\Enums\OrderStatue;
use App\Enums\PaymentType;
use App\Http\Helpers\Helpers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Buyer\Checkout\StripeController;

class CheckOutService {


    private BillService $bill;

    public function __construct(BillService $bill) {
         $this->bill = $bill;
    }
    
    public function checkout() {
        $order = Order::find(session('order_id'));
        $items = $order->orderItems;
        $bill = $order->bill;
        
        return view('web.checkout.checkout',[
            'items' => $items,
            'bill' => $bill
        ]);

    }

    public function save() {

        $order = Order::find(session('order_id'));

        if($order->transaction->mode == PaymentType::COD->value ) {
            $order->state = OrderStatue::CONFIRMED->value;
            $order->save();

            Cart_item::where('cart_id', session()->get('cart_id'))->delete();
            session()->forget('cart');
            session()->forget('cart_id');
            session()->put('total',0);

            return $this->myOrders();
        } else if ($order->transaction->mode == PaymentType::CRIDET->value) {

            return (new StripeController)->stripe($order);

        }    
    }

    public function myOrders() {

        $user = Helpers::getUserType();

        $orders = Order::where($user.'_id', Auth::guard($user)->user()->id)->get();

        return view ('web.account.orders',[
            'orders' => $orders
        ]);
    }

    public function cancel(Order $order) {
        $order->state =  OrderStatue::CANCELED->value;
        $order->save();
        return $this->myOrders();
    }

    public function confirm(Order $order) {
        
        return $this->bill->index();
    }

    public function delevered(Order $order) {
        $order->state =  OrderStatue::DELIVERED->value;
        $order->save();
        return $this->myOrders();
    }

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
                        'unit_amount' => $order->transaction->amount,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => "http://localhost:8000/checkout/pay/cridet/after",
            'cancel_url' => "http://localhost:8000/",
        ]);

        return redirect()->away($session->url);
    }

    public function afterPay() {
        $order = Order::find(session('order_id'));
            $order->state = OrderStatue::CONFIRMED->value;
            $order->save();

            Cart_item::where('cart_id', session()->get('cart_id'))->delete();
            session()->forget('cart');

            session()->forget('cart_id');
            session()->put('total',0);

            return $this->myOrders();
    }


    public function itemDelevered($item) {
        $item->state = 'delivered';
        $item->save();
        return $this->myOrders();
    }
}