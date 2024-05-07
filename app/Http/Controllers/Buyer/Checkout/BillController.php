<?php

namespace App\Http\Controllers\Buyer\Checkout;

use App\Http\Controllers\Controller;
use App\Service\Buyer\CheckOut\BillService;
use App\Http\Requests\Buyer\BillSaveRequest;

class BillController extends Controller
{

    private BillService $billService;

    public function __construct(BillService $billService) {
        $this->billService = $billService;
    }

    public function index() {
        return $this->billService->index(); 
    }

    public function save(BillSaveRequest $request) {
        return $this->billService->save($request->validated());
    }

}
