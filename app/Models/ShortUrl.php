<?php

namespace App\Models;

use AshAllenDesign\ShortURL\Models\ShortURLVisit;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "short_urls";
    protected $fillable = ['destination_url','url_key','user_id','password','qr_code','deleted_add','default_short_url','activated_at','deactivated_at','click_count','active','title','archived_at'];
    public $timestamps = true;

    public function visits()
    {
        return $this->hasMany(ShortURLVisit::class, 'short_url_id');
    }

    public function countVisits()
    {
        return $this->hasMany(ShortURLVisit::class);
    }
}
