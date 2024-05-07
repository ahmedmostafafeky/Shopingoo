<?php 


namespace App\Http\Helpers;

use App\Enums\UserType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class Helpers {
    public static function getUserType() {
        if (Auth::guard('buyer')->check()) return UserType::BUYER->value;
        elseif (Auth::guard('seller')->check()) return UserType::SELLER->value;
        elseif (Auth::guard('admin')->check()) return UserType::ADMIN->value;
        else return null;
    }
    public static function getUserTypeDataBase(FormRequest $request) {
        
    }
}