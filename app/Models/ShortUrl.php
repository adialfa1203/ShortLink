<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
    use HasFactory;
    protected $table = "short_urls";
    protected $fillable = ['destination_url','url_key','user_id','password','qr_code','deleted_add','default_short_url','activated_at','deactivated_at','click_count','active'];
}
