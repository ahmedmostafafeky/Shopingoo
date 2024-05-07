<?php 

namespace App\Service\Buyer\CheckOut;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Cart_item;
use App\Enums\OrderStatue;
use App\Enums\PaymentType;
use App\Models\Order_item;
use App\Models\Transaction;
use App\Http\Helpers\Helpers;
use App\Service\Guest\CartService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class PaymentService {

    private CartService $cartService;


    public function __construct(CartService $cartService) {
        $this->cartService = $cartService;
    }

    public function index() {

        //save the cart 
        session()->put('cart_id', $this->cartService->saveCart());

        if(!session('cart_id')) {
           return back()->with('fail','The Cart Is Empty');
        }
        
        //go to payment
        return view('web.checkout.payment');
    }

    public function cod() {

        //cach on delevery 

        //get data from cart to order table with state = placed
        //then save order id in session 
        session()->put('order_id',$this->placeOrder());
        $this->storeTransaction(PaymentType::COD->value);

        //go to the bill
        return redirect('/checkout/bill');

    }

    public function cridet() {

        //cridet card useing stripe
        session()->put('order_id',$this->placeOrder());
        $this->storeTransaction(PaymentType::CRIDET->value);
        return redirect('/checkout/bill');

        
    }


    public function storeTransaction($type) {
        $transaction = new Transaction;
        $transaction->order_id = session()->get('order_id');
        $user = Helpers::getUserType();
        $transaction->{$user.'_id'} = Auth::guard($user)->user()->id;
        $transaction->mode = $type;
        $transaction->amount = session()->get('total') + (session()->get('total') * 0.25) +  (session()->get('total') * 0.14);
        $transaction->save();
    }


    private function placeOrder() {

        $cart_id = session('cart_id');

        $items = Cart_item::where('cart_id', $cart_id)->get();
    
        $order = new Order;
        $user = Helpers::getUserType();
        $order->{$user.'_id'} = Auth::guard($user)->user()->id;
        $order->state = OrderStatue::BINDING->value;
        $order->save();

        foreach($items as $item) {
            $order_item = new Order_item;
            $order_item->order_id = $order->id;
            $order_item->product_id = $item['product_id'];
            $order_item->price = $item['price'];
            $order_item->amount = $item['amount'];
            $order_item->state = 'confirmed';
            $order_item->save();
        }
    
        return $order->id;
    }

}