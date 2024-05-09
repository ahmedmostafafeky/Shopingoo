<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'name',
        'phone',
        'email',
        'zip_code',
        'city',
        'address',
        'country',
        'cart_cost',
        'delivary_cost'
    ];

    public function order() : BelongsTo {
        return $this->belongsTo(Order::class);
    }
}
