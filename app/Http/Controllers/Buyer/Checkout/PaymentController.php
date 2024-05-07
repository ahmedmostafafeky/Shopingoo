<?php

namespace App\Http\Controllers\Buyer\Checkout;


use App\Http\Controllers\Controller;
use App\Service\Buyer\CheckOut\PaymentService;


class PaymentController extends Controller
{
    private PaymentService $payService;

    public function __construct(PaymentService $payService) {
        $this->payService = $payService;
    }

    public function index() {
        return $this->payService->index();
    }

    public function cod() {
        return $this->payService->cod();
    }

    public function cridet() {
        return $this->payService->cridet();
    }


}