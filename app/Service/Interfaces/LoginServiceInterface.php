<?php 

namespace App\Service\Interfaces;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;

interface LoginServiceInterface {
    public function login(LoginRequest $request);
    public function logout(Request $request);
}