<?php

namespace App\Repository\Auth;

use Carbon\Carbon;
use App\Models\UserInfo;
use App\Repository\Interfaces\RegisterReposetoryInterface;

class RegisterationRepository implements RegisterReposetoryInterface {

    public function createNewUser(array $attribuets, $user) {
        return $user::create($attribuets);
    }
    
    public function createUserInfo(array $attribuets, $user, $id) {
        return UserInfo::create([
            'number' => '000000000',
            $user.'_id' => $id,
            'address' => "SomeWhere",
            'dob' => Carbon::now()
            ]
        );
    }
    
}