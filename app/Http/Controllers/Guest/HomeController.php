<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index() {
        return view('web.home',[
            'categories' => Category::all(),
            'products' => Product::all(),
        ]);
    }
}
