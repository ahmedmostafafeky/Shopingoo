<?php

namespace App\Http\Controllers\Buyer;

use App\Models\Admin;
use App\Models\Buyer;
use App\Models\Seller;
use Illuminate\Http\Request;
use App\Http\Helpers\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Service\Buyer\ProfileService;
use App\Http\Requests\Buyer\ProfileUpdateRequest;

class ProfileController extends Controller
{
    //

    private ProfileService $profileService;

    public function __construct(ProfileService $profileService) {
        $this->profileService = $profileService;
    }

    public function profile() {
        return $this->profileService->profile();
    }

    public function edit() {
        return $this->profileService->edit();
    }

    public function updata(ProfileUpdateRequest $request) {
        
        return $this->profileService->updata($request->validated());

    }

}
