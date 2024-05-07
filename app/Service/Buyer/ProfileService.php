<?php
namespace App\Service\Buyer;

use App\Http\Helpers\Helpers;
use App\Http\Helpers\UploadImage;
use Illuminate\Support\Facades\Auth;


class ProfileService {

    public function profile() {

        $userType = Helpers::getUserType();
        $userClass = 'App\Models\\'.ucwords($userType);
        $user = $userClass::find(Auth::guard($userType)->user()->id);
        $userdata = [
            'name' => $user->name,
            'email' => $user->email,
            'username' => $user->username,
            'photo' => $user->photo,
            'phone' => $user->userinfo->number,
            'address' => $user->userinfo->address,
            'dob' => $user->userinfo->dob
        ];

        return view('web.account.profile',[
            'userdata' => $userdata
        ]);
    }

    public function edit() {

        $userType = Helpers::getUserType();
        $userClass = 'App\Models\\'.ucwords($userType);
        $user = $userClass::find(Auth::guard($userType)->user()->id);
        $userdata = [
            'name' => $user->name,
            'email' => $user->email,
            'username' => $user->username,
            'photo' => $user->photo,
            'phone' => $user->userinfo->number,
            'address' => $user->userinfo->address,
            'dob' => $user->userinfo->dob
        ];

        return view('web.account.edit-profile',[
            'userdata' => $userdata
        ]);
    }

    public function updata( $attribuites) {
        

        $userType = Helpers::getUserType();
        $userClass = 'App\Models\\'.ucwords($userType);
        $user = $userClass::find(Auth::guard($userType)->user()->id);
        $user->name = $attribuites['name'];
        $user->email = $attribuites['email'];
        $user->userinfo->number = $attribuites['phone'];
        $user->userinfo->address = $attribuites['address'];
        if(array_key_exists('photo',$attribuites)) 
            $user['photo'] = UploadImage::saveImage($attribuites['photo'],'/profileImage');
        $user->save();
        $user->push();
        
        return back();
    }
}