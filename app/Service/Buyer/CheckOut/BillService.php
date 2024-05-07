<?php 

namespace App\Service\Buyer\CheckOut;

use App\Models\Bill;
use App\Http\Helpers\Helpers;
use Illuminate\Support\Facades\Auth;


class BillService {
    
    public function index() {

        $userType = Helpers::getUserType();
        $userClass = 'App\Models\\'.ucwords($userType);
        $user = $userClass::find(Auth::guard($userType)->user()->id);
        $userdate = [
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->userinfo->number,
            'address' => $user->userinfo->address,
        ];

        return view('web.checkout.billing-details',[
            'userDate' => $userdate
        ]);

    }

    public function save($attribuets) {
        
        Bill::where('order_id', session('order_id'))->delete();

        $bill = new Bill;
        $bill->name = $attribuets['name'];
        $bill->phone = $attribuets['mobile'];
        $bill->email = $attribuets['email'];
        $bill->address = $attribuets['address'];
        $bill->zip_code = $attribuets['zip_code'];
        $bill->city = $attribuets['city'];
        $bill->country = $attribuets['country'];
        $bill->order_id = session('order_id');
        $bill->delivary_cost = session('total') * .25;
        $bill->cart_cost = session('total');
        $bill->save();

        return redirect('/checkout');
    }
}