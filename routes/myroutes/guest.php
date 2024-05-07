<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Guest\CartController;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Guest\SearchController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Guest\CategoryGuestController;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::view('/about', 'web.about');
Route::view('/contact','web.contact');
Route::get('/search',[SearchController::class,'index']);
Route::post('/search',[SearchController::class,'search']);


Route::prefix('blog')->group( function () {
    Route::view('/','web.blog.posts');
    Route::view('/post','web.blog.post');
});


Route::prefix('/shop')->group(function() {

    Route::get('/cart', [CartController::class,'index']);

    Route::view('/product', 'web.shop.product-details');

});


Route::prefix('/categories')->group(function() {
    Route::get('/{category}',[CategoryGuestController::class,'index']);
    Route::view('/cat2', 'web.categories.cat2');
    Route::view('/cat3', 'web.categories.cat3');
});

Route::get('/login',[LoginController::class,'index'])->name('viewlogin')->middleware('guest');
Route::post('/login',[LoginController::class,'login'])->name('login')->middleware('guest');

Route::get('/register',[RegisterController::class,'index'])->name('viewregiter')->middleware('guest');
Route::post('/register',[RegisterController::class,'register'])->name('register')->middleware('guest');

Route::get('/addtocart/{id}',[CartController::class,'addItemToSession'])->name('add_to_cart');
Route::delete('/removefromcart',[CartController::class,'removeItemFromSession'])->name('remove_from_cart');
Route::get('/removeAllFromCart/{id}',[CartController::class,'removeAllFromSession'])->name('remove_all_from_cart');