<?php

namespace App\Repository\Interfaces;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;

interface LoginReposetoryInterface {
    public function attemptToLogin(LoginRequest $request, $user);

}