<?php

namespace App\Models;

use AshAllenDesign\ShortURL\Models\ShortURL;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Components extends Model
{
    protected $fillable = [
        'component_name',
        'cover_img',
        'profile_img',
    ];

    use HasFactory;
    public function button()
    {
        return $this->belongsTo(Button::class);
    }
    public function microsite()
    {
        return $this->hasMany(Microsite::class);
    }
    public function urlshort()
    {
        return $this->hasMany(ShortURL::class);
    }
}
