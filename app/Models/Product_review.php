<?php

namespace App\Models;

use App\Models\Admin;
use App\Models\Buyer;
use App\Models\Seller;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product_review extends Model
{
    use HasFactory;
    protected $fillable = ['review',	'rate' ,	'seller_id' ,	'buyer_id' ,	'admin_id' ,	'product_id'];


    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

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

}
