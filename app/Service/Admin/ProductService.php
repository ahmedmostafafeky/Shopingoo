<?php
namespace App\Service\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Http\Helpers\UploadImage;
use Illuminate\Support\Facades\Auth;


class ProductService {
    public function index()
    {
        return view ('admin.pages.products.index', [
            'products' => Product::all(),
            'user' => Auth::guard('admin')->user()->id,
        ]);
    }

    public function create()
    {
        //
        return view ('admin.pages.products.create',[
            'categories' => Category::all(),
        ]);
    }

    public function store($attribuets)
    {

        if(array_key_exists('photo',$attribuets))
            $attribuets['photo'] = UploadImage::saveImage($attribuets['photo'],'/products');
        
        $attribuets['admin_id'] = Auth::guard('admin')->user()->id;
        Product::create($attribuets);
        return back();

    }

    public function show(string $id)
    {
        return view ('admin.pages.products.show', [
            'product' => Product::find($id),
        ]);
    }

    public function edit(string $id)
    {
        $product = Product::find($id);
        if($product->admin_id == Auth::guard('admin')->user()->id) {
            return view ('admin.pages.products.edit', [
                'product' => Product::find($id),
            ]);
        }
        return back();
    }

    public function update($attribuets, string $id)
    {
        $product = Product::find($id);
        if($product->admin_id == Auth::guard('admin')->user()->id) {
            $product->update($attribuets);
        }
        return back();
    }

    public function destroy(string $id)
    {
        $product = Product::find($id);
        if($product->admin_id == Auth::guard('admin')->user()->id)  {
            $product->delete();
        }
        return back();
    }
}