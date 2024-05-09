<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Seller\SellerOrderController;
use App\Http\Controllers\Seller\SellerProductController;

Route::prefix('/seller')->group(function() {
    Route::get('/',[SellerController::class,'index']);

    //products
    Route::get('/products',[SellerProductController::class,'index']);
    Route::get('/product/{id}',[SellerProductController::class,'show']);
    Route::get('/product',[SellerProductController::class,'create']);
    Route::post('/product',[SellerProductController::class,'store']);
    Route::get('/product/{product}/edit',[SellerProductController::class,'edit']);
    Route::put('/product/{product}',[SellerProductController::class,'update']);
    Route::delete('/product/{product}',[SellerProductController::class,'destroy']);

    Route::get('/orders',[SellerOrderController::class,'index']);
    Route::get('/orders/send/{item}/{amount}',[SellerOrderController::class,'send']);

});