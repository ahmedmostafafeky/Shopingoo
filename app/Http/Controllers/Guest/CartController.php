<?php

namespace App\Http\Controllers\Guest;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Service\Guest\CartService;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;


class CartController extends Controller
{

    private CartService $cartService;

    public function __construct(CartService $cartService) {
        $this->cartService = $cartService;
    }

    public function addItemToSession($id)
    {
        return $this->cartService->addItemToSession($id);
    }

    public function removeItemFromSession(Request $request)
    {
        return $this->cartService->removeItemFromSession($request->id);
    }

    public function index() {
        return $this->cartService->index();        
    }

    public function moveToWish(Request $request) {
        return $this->cartService->moveToWish($request->id);
    }

    public function removeAllFromSession($id) {
        return $this->cartService->removeAllFromSession($id);
    }

}