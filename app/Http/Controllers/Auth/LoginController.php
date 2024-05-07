<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Service\Interfaces\LoginServiceInterface;

class LoginController extends Controller
{
    private LoginServiceInterface $loginService;

    public function __construct(LoginServiceInterface $loginService) {
        $this->loginService = $loginService;
    }

    public function index() {
        return view('auth.login');
    }
    
    public function login(LoginRequest $request) {
        return $this->loginService->login($request);
    }

    public function logout(Request $request){
        return $this->loginService->logout($request);
    }
}