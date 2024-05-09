<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ContactController;
use  App\Http\Controllers\Admin\ProductController;
use  App\Http\Controllers\Admin\CategoryController;
use  App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\AdminOrderController;

Route::prefix('/admin')->group(function() {
    Route::get('/dashboard',[AdminController::class,'index'])->name('admindashboard');
    Route::get('/settings',[SettingsController::class,'index'])->name('settings.index');
    Route::put('/settings',[SettingsController::class,'update'])->name('settings.update');
    Route::resource('/categories',CategoryController::class);
    Route::resource('/products',ProductController::class);
    Route::resource('/slider',SliderController::class);
    Route::get('/contact',[ContactController::class,'index']);
    Route::post('/contact/edit',[ContactController::class,'update']);
    Route::get('/orders',[AdminOrderController::class,'index']);
    Route::get('/show/order/{order}',[AdminOrderController::class,'show']);
    Route::get('/send/order/{order}',[AdminOrderController::class,'send']);
});