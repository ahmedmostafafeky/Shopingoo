<?php

namespace App\Http\Controllers\Buyer\Checkout;

use App\Models\Order;
use App\Models\Order_item;
use App\Http\Controllers\Controller;
use App\Service\Buyer\CheckOut\CheckOutService;

class Checkout extends Controller
{
    private CheckOutService $checkService;

    public function __construct(CheckOutService $checkService) {
        $this->checkService = $checkService;
    }
    
    public function checkout() {
        return $this->checkService->checkout();
    }

    public function save() {
        return $this->checkService->save();
    }

    public function myOrders() {

        return $this->checkService->myOrders();
    }

    public function cancel(Order $order) {
        return $this->checkService->cancel($order);
    }
    
    public function confirm(Order $order) {
        return $this->checkService->confirm($order);
    }
    
    public function delevered(Order $order) {
        return $this->checkService->delevered($order);
    }

    public function afterPay() {
        return $this->checkService->afterPay();
    }


    public function itemDelevered(Order_item $item) {
        return $this->checkService->itemDelevered($item);
    }
}