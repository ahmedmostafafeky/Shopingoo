<?php

namespace App\Repository\Interfaces;

interface RegisterReposetoryInterface {
    public function createNewUser(array $attribuets,$user);
    public function createUserInfo(array $attribuets,$user,$id);
}