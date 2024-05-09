<?php

namespace App\Models;


use App\Models\Wish;
use App\Models\Admin;
use App\Models\Seller;
use App\Models\Category;
use App\Models\Order_item;
use App\Models\Product_review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory ,SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'photo',
        'category_id',
        'seller_id',
        'admin_id',
        'amount',
        'cost'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function seller(): BelongsTo
    {
        return $this->belongsTo(Seller::class);
    }

    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

    public function orderItem(): HasMany 
    {
        return $this->hasMany(Order_item::class);
    }

    public function wish(): BelongsTo
    {
        return $this->belongsTo(Wish::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Product_review::class);
    }
}

