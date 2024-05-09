<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Cart;
use App\Models\Wish;
use App\Models\Order;
use App\Models\UserInfo;
use App\Models\Transaction;
use App\Models\Product_review;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Buyer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable ;

    protected $guard = 'buyer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'photo',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class);
    }
    
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
    public function transaction(): HasOne 
    {
        return $this->hasOne(Transaction::class);
    }
    public function userinfo(): HasOne 
    {
        return $this->hasOne(UserInfo::class);
    }
    public function wish(): HasOne 
    {
        return $this->hasOne(Wish::class);
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(Product_review::class);
    }

}
