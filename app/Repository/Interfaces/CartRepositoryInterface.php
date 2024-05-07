<?php

namespace App\Repository\Interfaces;

interface CartRepositoryInterface {
    public function newCartInDatabase();
    public function gatCartFromDataBase();
    public function deleteCartFromDataBase();
    public function getCartFromSession();
    public function deleteCartFromSession();
    public function addCartToSession();
}