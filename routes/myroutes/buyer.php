<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Buyer\WishController;
use App\Http\Controllers\Guest\CartController;
use App\Http\Controllers\Buyer\Checkout\Checkout;
use App\Http\Controllers\Buyer\ProfileController;
use App\Http\Controllers\Buyer\Checkout\BillController;
use App\Http\Controllers\Buyer\Checkout\StripeController;
use App\Http\Controllers\Buyer\Checkout\PaymentController;

    Route::prefix('/profile')->group(function() {

        Route::get('/',[ProfileController::class,'profile']);

        Route::get('/edit',[ProfileController::class,'edit']);
        Route::put('/update',[ProfileController::class,'updata']);
        
        Route::get('/myorders',[Checkout::class,'myOrders']);
        Route::get('/cancelOrder/{order}',[Checkout::class,'cancel']);
        Route::get('/confirmOrder/{order}',[Checkout::class,'confirm']);
        Route::get('/confirmOrderDelevary/{order}',[Checkout::class,'delevered']);

        Route::get('/confirmOrderItem/{item}',[Checkout::class,'itemDelevered']);

        

    });

    Route::prefix('/checkout')->group(function() {
        
        Route::get('/',[Checkout::class,'checkout']);
        Route::post('/save',[Checkout::class,'save']);

        Route::get('/bill', [BillController::class,'index']);
        Route::post('/bill/save', [BillController::class,'save']);

        Route::get('/pay', [PaymentController::class,'index']);
        Route::post('/pay/cod', [PaymentController::class,'cod']);

        Route::post('/pay/cridet',[PaymentController::class,'cridet']);
        
        Route::get('/pay/cridet/after',[Checkout::class,'afterPay']);


    });

    Route::prefix('/shop')->group(function() {

        Route::get('/wish',[WishController::class,'index']);  
        Route::post('/wish/add',[WishController::class,'addToWish']);  
        Route::delete('/wish/delete',[WishController::class,'removeFromWish']);  
        Route::post('/wish/move',[WishController::class,'moveToCart']);  

        Route::post('/cart/move', [CartController::class,'moveToWish']);
    });


