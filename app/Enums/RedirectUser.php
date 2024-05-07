<?php
 
namespace App\Enums;

enum RedirectUser 
{
    const BUYER = '/profile';
    const SELLER = '/seller';
    const ADMIN = '/admin/dashboard';
}