<?php

namespace App\Models;

use App\Models\Bill;
use App\Models\Admin;
use App\Models\Buyer;
use App\Models\Seller;
use App\Models\Shipping;
use App\Models\Order_item;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'buyer_id',
        'seller_id',
        'admin_id',
        'state'
    ];

    public function seller(): BelongsTo
    {
        return $this->belongsTo(Seller::class);
    }

    public function buyer(): BelongsTo
    {
        return $this->belongsTo(Buyer::class);
    }

    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }
    public function orderItems(): HasMany
    {
        return $this->hasMany(Order_item::class);
    }
    public function shipping(): HasOne {
        return $this->hasOne(Shipping::class);
    }
    public function transaction(): HasOne {
        return $this->hasOne(Transaction::class);
    }

    public function bill(): HasOne {
        return $this->hasOne(Bill::class);
    }

}
