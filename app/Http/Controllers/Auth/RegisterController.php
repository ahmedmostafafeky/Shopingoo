<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Service\Interfaces\RegisterServiceInterface;

class RegisterController extends Controller
{
    private RegisterServiceInterface $registerService;


    public function __construct(RegisterServiceInterface $registerService) {
        $this->registerService = $registerService;
    }

    public function index() {
        return view('auth.register');
    }

    public function register(RegisterRequest $request) {
        return $this->registerService->register($request->validated());
    }
}


