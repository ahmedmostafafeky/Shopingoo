<?php
namespace App\Service\Admin;

use App\Models\Category;
use App\Http\Helpers\UploadImage;


class CategoryService {

    public function index()
    {
        //
        return view ('admin.pages.categories.index', [
            'categories' => Category::all(),
        ]);
    }


    public function create()
    {
        return view ('admin.pages.categories.create');
    }


    public function store($attribuets)
    {
        if(array_key_exists('photo',$attribuets))
            $attribuets['photo'] = UploadImage::saveImage($attribuet['photo'],'/categories');    
        Category::create($attribuets);
        return back();
    }

    public function show(string $id)
    {
        return view ('admin.pages.categories.show',[
            'category' => Category::find($id), 
        ]);
    }

    public function edit(string $id)
    {
        return view ('admin.pages.categories.edit',[
            'category' => Category::find($id),
        ]);
    }

    public function update($attribuets, string $id)
    {
        Category::find($id)->update($attribuets);
        return back();
    }

    public function destroy(string $id)
    {
        //
        Category::find($id)->delete();
        return back();
    }
}