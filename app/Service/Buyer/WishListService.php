<?php

namespace App\Service\Buyer;

use App\Models\Wish;
use App\Models\Product;
use App\Http\Helpers\Helpers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;


class WishListService {
    
    public function index() {

        $userType = Helpers::getUserType();
        $user_id = Auth::guard($userType)->user()->id;
        $list = Wish::where($userType.'_id',$user_id)->get();
        
        $products = $list->map(function($item) {
            return Product::find($item->product_id);
        });
        
        return view('web.shop.wish-list',[
            'products' => $products
        ]);
    }

    public function addToWish($product_id) {


        $userType = Helpers::getUserType();
        $user_id = Auth::guard($userType)->user()->id;
      
        $checkIfExist = Wish::where('product_id',$product_id)->where($userType.'_id',$user_id)->get();

        if($checkIfExist->isEmpty()) {
            $wish = new Wish;
            $wish->{$userType.'_id'} = $user_id;
            $wish->product_id = $product_id;
            $wish->save();
        };

        return back();

    }

    public function removeFromWish($product_id) {
        
        Wish::where('product_id',$product_id)->delete();
        
        return back();
    }

    public function moveToCart($product_id) {
        
        $this->removeFromWish($product_id);
        $id = $product_id;
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);
        $amount = 1;
        if (array_key_exists($id, $cart)) {
            $amount +=  $cart[$id]['amount']; 
        };
        if($amount > $product->amount) {
            return back()->with('fail',"you can't add more");
        }
        $cart[$id] = [
            "id" => $product->id,
            "name" => $product->name,
            "price" => $product->price,
            "description" => $product->description,
            "category_id" => $product->category_id,
            "photo" => $product->photo,
            "amount" => $amount
        ];
        session()->put('cart', $cart);
        return back();

    }

    public function total() {
        $cart = session()->get('cart');
        $total = 0;
    
        foreach($cart as $item) {
            $total += $item['price'] * $item['amount'];
        }
        
        session()->put('cart', $cart);
        session()->put('total', $total);
        
    }

}