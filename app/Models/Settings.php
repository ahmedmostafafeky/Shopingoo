<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Settings extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_title', 
        'site_logo', 
        'fav_icon', 
        'meta_description', 
        'copy_rights', 
        'email', 
        'phone', 
        'address', 
        'twitter_link', 
        'facebook_link'
    ];
}
