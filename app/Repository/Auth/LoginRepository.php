<?php

namespace App\Repository\Auth;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Cart_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Repository\Interfaces\LoginReposetoryInterface;

class LoginRepository implements LoginReposetoryInterface {
    
    public function attemptToLogin(LoginRequest $request, $user) {
        $check = Auth::guard($user)->attempt(['email' => $request->email, 'password' => $request->password]);
        session()->put('userType', $user);
        return $check;
    }

}