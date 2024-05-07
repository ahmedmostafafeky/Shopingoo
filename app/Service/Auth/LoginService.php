<?php 

namespace App\Service\Auth;

use App\Models\Cart;
use App\Models\Admin;
use App\Models\Buyer;
use App\Models\Seller;
use App\Enums\UserType;
use App\Models\Product;
use App\Models\Cart_item;
use App\Enums\RedirectUser;
use Illuminate\Http\Request;
use App\Http\Helpers\Helpers;
use App\Service\Guest\CartService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Auth\LoginRequest;
use App\Service\Interfaces\LoginServiceInterface;
use App\Repository\Interfaces\LoginReposetoryInterface;

class LoginService implements LoginServiceInterface {

    private LoginReposetoryInterface $loginReposetory;
    private CartService $cartService;

    public function __construct(LoginReposetoryInterface $loginReposetory, CartService $cartService) {
        $this->loginReposetory = $loginReposetory;
        $this->cartService = $cartService;
    }

    public function login(LoginRequest $request) {

        //check the user type and after login save the cart to session if there is a cart
        if ($this->loginReposetory->attemptToLogin($request, UserType::BUYER->value))  {
            $this->cartService->addCartContentToSession(UserType::BUYER->value);
            return $this->redirectTo(RedirectUser::BUYER);
        }
        elseif ($this->loginReposetory->attemptToLogin($request, UserType::SELLER->value)) {
            $this->cartService->addCartContentToSession(UserType::SELLER->value);
            return $this->redirectTo(RedirectUser::SELLER);
        }
        elseif ($this->loginReposetory->attemptToLogin($request, UserType::ADMIN->value)) {
            $this->cartService->addCartContentToSession(UserType::ADMIN->value);
            return $this->redirectTo(RedirectUser::ADMIN);
        }
        
        //if wrong credintials redirect back
        session()->flash('fail','incorect credintals');
        return  redirect()->route('login');
    }

    public function logout(Request $request) {

        $this->cartService->saveCart();

        session()->forget('cart');
        session()->forget('total');

        Auth::guard(Helpers::getUserType())->logout();
        
        return redirect('/');
    }

    /////////////////////////// helpers
    private function redirectTo($url) {
        
        if (session()->has('url.intended')) {
            $redirectTo = session()->get('url.intended');
            session()->forget('url.intended');
            
            return redirect($redirectTo);
        }
        return redirect($url);
    }

}
