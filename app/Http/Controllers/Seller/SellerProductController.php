<?php

namespace App\Http\Controllers\Seller;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Helpers\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SellerProductController extends Controller
{
    //
    public function index() {
        $user = Helpers::getUserType();
        $products = Product::where($user.'_id',Auth::guard($user)->user()->id)->get();
        return view('web.seller-account.products.index',[
            'products' => $products
        ]);
    }

    public function show() {
        return view('web.seller-account.products.show',[
            'product' => $product
        ]);
    }

    public function create() {
        return view('web.seller-account.products.create',[
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request) {


        $user = Helpers::getUserType();
        
        $attribuets = $request->validate([
            "name" => "",
            "price" => "",
            "cost" => "",
            "description" => "",
            "category_id" => "",
            "photo" => 'image',
            "amount" => ''
        ]);
        if(array_key_exists('photo',$attribuets))
            $attribuets['photo'] = $request->file('photo')->store('/products');
        
        $attribuets[$user.'_id'] = Auth::guard($user)->user()->id;
        Product::create($attribuets);
        return back();
    }

    public function edit(Product $product) {
        return view('web.seller-account.products.edit',[
            'product' => $product
        ]);
    }

    public function update(Product $product , Request $request) {
        $attribuets = $request->validate([
            "name" => "",
            "description" => "",
            "price" => "",
            "cost" => "",
            "photo",
            "amount" => "",
        ]);

        if(array_key_exists('photo',$attribuets))
            $attribuets['photo'] = $request->file('photo')->store('/products');

        $product->update($attribuets);
        return back()->with('sucsess','updated successfuly');

    }

    public function destroy(Product $product ) {
      
       $product->delete();
       return back()->with('sucsess','deleted successfuly');
    }

}
