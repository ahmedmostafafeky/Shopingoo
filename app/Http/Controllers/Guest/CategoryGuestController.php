<?php

namespace App\Http\Controllers\Guest;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryGuestController extends Controller
{
    //

    public function index(Category $category) {
        
        return view('web.categories.category',[
            'categoryname' => $category->name,
            'products' => $category->products
        ]);
    }
}
