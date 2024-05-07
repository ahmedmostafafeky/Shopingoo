<?php
 
namespace App\Enums;

enum OrderStatue :string
{
    case BINDING = 'binding';
    case CONFIRMED = 'confirmed';
    case CANCELED = 'canceled';
    case SHIPPED = 'shipped';
    case DELIVERED = 'delivered';
}