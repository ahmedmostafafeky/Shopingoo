<?php

namespace App\Service\Auth;

use Carbon\Carbon;
use App\Models\UserInfo;
use App\Http\Helpers\UploadImage;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Controllers\Auth\LoginController;
use App\Service\Interfaces\RegisterServiceInterface;
use App\Repository\Interfaces\RegisterReposetoryInterface;


class RegisterService implements RegisterServiceInterface {

    private RegisterReposetoryInterface $registerReposetory;

    public function __construct(RegisterReposetoryInterface $registerReposetory) {
        $this->registerReposetory = $registerReposetory;
    }

    public function register(array $attribuets) {

        //hash the password
        $attribuets['password'] = Hash::make($attribuets['password']);

        //save the profile photo
        $attribuets['photo'] = UploadImage::saveImage($attribuets['photo'], '/profileImage');

        //get user's type and class
        $userType = $attribuets['type'];
        $user = 'App\Models\\'.ucwords($userType);
        
        //create the user 
        $currentUser = $this->registerReposetory->createNewUser($attribuets, $user);

        //create the user info
        $this->registerReposetory->createUserInfo($attribuets, $userType, $currentUser->id);

        //redirect to login
        return redirect('/login');
    }
}
