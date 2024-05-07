<?php

namespace App\Http\Controllers\Buyer;

use App\Models\Wish;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Helpers\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Service\Buyer\WishListService;

class WishController extends Controller
{

    private WishListService $wishService;
    
    public function __construct(WishListService $wishService) {
        $this->wishService =  $wishService;
    }

    public function index() {
        return $this->wishService->index();
    }

    public function addToWish(Request $request) {
        return $this->wishService->addToWish($request->product_id);
    }

    public function removeFromWish(Request $request) {
        return $this->wishService->removeFromWish($request->product_id);
    }

    public function moveToCart(Request $request) {
        return $this->wishService->moveToCart($request->product_id);
    }

}
