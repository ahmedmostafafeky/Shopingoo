<?php

namespace App\Http\Controllers\Guest;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    //

    public function index() {
        return view('web.search');
    }

    public function search(Request $request) {

        $search = $request->search;
        $type = $request->filter;

        switch($type) {
            case 'Name':
                $products = Product::where('name', 'like', "%$search%")->get();
                break;
            case 'Price':
                $products = Product::where('price', 'like', "%$search%")->get();
                break;
            case 'Description':
                $products = Product::where('description', 'like', "%$search%")->get();
                break;
        }

        

        return view('web.search',[
            'products' => $products
        ]);
    }
}
