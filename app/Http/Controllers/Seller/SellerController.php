<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Helpers\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    //
    public function index() {
        return view('web.seller-account.index');
    }
}
