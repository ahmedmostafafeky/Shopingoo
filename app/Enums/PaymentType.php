<?php
 
namespace App\Enums;

enum PaymentType :string
{
    case COD = 'cod';
    case PAYPAL = 'paypal';
    case CRIDET = 'card';

}