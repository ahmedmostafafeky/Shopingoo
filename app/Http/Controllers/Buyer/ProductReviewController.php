<?php

namespace App\Http\Controllers\Buyer;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Helpers\Helpers;
use App\Models\Product_review;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductReviewController extends Controller
{
    //

    public function addReview(Request $request , Product $product) {

        $userType = Helpers::getUserType();
        $userClass = 'App\Models\\'.ucwords($userType);
        $userId = Auth::guard($userType)->user()->id;

        $review = new Product_review;
        $review->rate = $request->rate;
        $review->review = $request->review;
        $review->product_id = $product->id;
        $review->{$userType.'_id'} = $userId;
        $review->save();
        return back();
    }
}
