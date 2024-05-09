<?php

namespace App\Http\Controllers\Buyer;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Product_review;
use App\Http\Controllers\Controller;

class ShopProductController extends Controller
{
    //
   

    
    public function index(Product $product) {

        $reviews = Product_review::Where('product_id',$product->id)->get();
        $reviewCounter = [];
        $reviewCounter[0] = $reviews->count();
        $reviewCounter[1] = $reviews->where('rate',1)->count();
        $reviewCounter[2] = $reviews->where('rate',2)->count();
        $reviewCounter[3] = $reviews->where('rate',3)->count();
        $reviewCounter[4] = $reviews->where('rate',4)->count();
        $reviewCounter[5] = $reviews->where('rate',5)->count();

        $reviewPercintage = [];

        $total = 0;

        for($i = 1; $i <= 5; ++$i) {
            $total += $reviewCounter[$i] * $i;
        }
        

        $reviewPercintage[0] = $reviewCounter[0] ?   round($total / $reviewCounter[0],2) : 0;
        $reviewPercintage[1] = $reviewCounter[1] ? ($reviewCounter[1] / $reviewCounter[0]) * 100 : 0;
        $reviewPercintage[2] = $reviewCounter[2] ? ($reviewCounter[2] / $reviewCounter[0]) * 100 : 0;
        $reviewPercintage[3] = $reviewCounter[3] ? ($reviewCounter[3] / $reviewCounter[0]) * 100 : 0;
        $reviewPercintage[4] = $reviewCounter[4] ? ($reviewCounter[4] / $reviewCounter[0]) * 100 : 0;
        $reviewPercintage[5] = $reviewCounter[5] ? ($reviewCounter[5] / $reviewCounter[0]) * 100 : 0;

        $users = [];
        
        foreach($reviews as $review) {
            if($review->buyer_id !=null) {
                $users[$review->id]['name'] = $review->buyer->name;
                $users[$review->id]['image'] = $review->buyer->photo;
            } else if ($review->seller_id !=null) {
                $users[$review->id]['name'] = $review->seller->name;
                $users[$review->id]['image'] = $review->seller->photo;
            }else if ($review->admin_id !=null) {
                $users[$review->id]['name'] = $review->admin->name;
                $users[$review->id]['image'] = $review->admin->photo;
            }
        }
        

                            

        
        return view('web.shop.product-details', [
            'product' => $product,
            'reviews' => Product_review::Where('product_id',$product->id)->get(),
            'reviewCounter' => $reviewCounter,
            'reviewPercintage' => $reviewPercintage,
            'users' => $users
        ]);
    }
}
