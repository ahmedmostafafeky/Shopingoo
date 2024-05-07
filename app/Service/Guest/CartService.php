<?php

namespace App\Service\Guest;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Cart_item;
use App\Http\Helpers\Helpers;
use Illuminate\Support\Facades\Auth;
use App\Service\Buyer\WishListService;

class CartService {

    private WishListService $wishService;

    public function __construct(WishListService $wishService) {
        $this->wishService = $wishService;
    }

    public function addItemToSession($id) {

        $cart = session()->get('cart', []);
        $total = session()->get('total');
        $product = Product::find($id);
        if (array_key_exists($id, $cart)) { 
            $amount = $cart[$id]['amount'] + 1;
            if($amount > $product->amount) {  
                return back()->with('fail',"you can't add more");
            }
            $cart[$id]['amount'] += 1;
        } else {
            $cart[$id] = [
                "id" => $product->id,
                "name" => $product->name,
                "price" => $product->price,
                "description" => $product->description,
                "category_id" => $product->category_id,
                "photo" => $product->photo,
                "amount" => 1
            ];
        }
    
        $total += ($product->price);
        session()->put('cart', $cart);
        session()->put('total',$total);
        return back();
    }

    public function removeItemFromSession($id) {
        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            $total = session()->get('total');
            $total -= $cart[$id]['price'];
            session()->put('total',$total);

            if($cart[$id]['amount'] === 1) {
                unset($cart[$id]);
            } else {
                
                $cart[$id]['amount']--;
            }
            
            session()->put('cart', $cart);
        }
    }

    public function newCartInDatabase($user) {
        $cart = new Cart;
        $cart->{$user.'_id'} = Auth::guard($user)->user()->id;
        $cart->total = 0;
        $cart->save();
    }

    public function gatCartFromDataBase($user) {
        
        return Cart::where($user.'_id', Auth::guard($user)->user()->id)->first();
    }

    public function addAllItemsToSeeion($items) {

        if($items != null) {
            $cart = session()->get('cart', []);
            $total = session()->get('total');
            foreach($items as $item) {
                $id = $item->product_id;
                $product = Product::find($id);
                if (array_key_exists($id, $cart)) { 
                    $amount = $cart[$id]['amount'] + $item->amount;
                    if($amount > $product->amount) {  
                        return back()->with('fail',"you can't add more");
                    }
                    $cart[$id]['amount'] = $amount;
                } else {
                    $cart[$id] = [
                        "id" => $product->id,
                        "name" => $product->name,
                        "price" => $product->price,
                        "description" => $product->description,
                        "category_id" => $product->category_id,
                        "photo" => $product->photo,
                        "amount" => $item->amount
                    ];
                }
    
                $total += ($product->price * $cart[$id]['amount']);
            }
            session()->put('cart', $cart);
            session()->put('total',$total);
            
        }
        return back();
        
    }

    public function addCartContentToSession($user) {

        //get the cart from database 
        $cart = $this->gatCartFromDataBase($user);
       
        //if ther is no cart in data base then create new one 
        if ($cart == null)  {
            $this->newCartInDatabase($user);
        }
        else {
            $items = Cart_item::where('cart_id' , $cart->id)->get();
            $this->addAllItemsToSeeion($items);
        }
    }

    public function deleteCartItems($id) {
        
        $cartItems = Cart_item::where('cart_id',$id)->get();
        
        foreach($cartItems as $item) {
            $item->delete();
        } 

    }

    public function saveCartItems(array $products,$cartId) {
        foreach($products as $product) {
            $cart_item = new Cart_item;
            $cart_item->cart_id = $cartId;
            $cart_item->product_id = $product['id'];
            $cart_item->price = $product['price'];
            $cart_item->amount = $product['amount'];
            $cart_item->save();
        }
    }

    public function index() {
        return view('web.shop.cart');
    }

    public function moveToWish($id) {
        
        $this->wishService->addToWish($id);
        $this->removeItemFromSession($id);
        return back();
    }

    public function saveCart() {

        
        $items = session()->get('cart');
        if($items == null)  {    
            return null; 
        }

        $user = Helpers::getUserType();

        $cart = $this->gatCartFromDataBase($user);          
        $this->deleteCartItems($cart->id);

        $this->saveCartItems($items,$cart->id);
        $cart->total = session()->get('total');
        $cart->save();

        return $cart->id;
    }

    public function removeAllFromSession($id) {

        $cart = session()->get('cart');
        if(isset($cart[$id])) {
            $total = session()->get('total');
            $total -= ($cart[$id]['price'] * $cart[$id]['amount']);
            session()->put('total',$total);
            
            unset($cart[$id]);
            session()->put('cart', $cart);
            // dd($cart);
           
        }
        return back();
    }

}