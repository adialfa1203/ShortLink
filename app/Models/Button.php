<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Button extends Model
{
    protected $fillable = [
        'name_button',
        'icon',
        'color_hex',
    ];

    use HasFactory;
    public function socials() :HasMany
    {
        return $this->hasMany(Social::class,'buttons_id');
    }
    public function buttonLinks(): HasMany
    {
        return $this->hasMany(ButtonLinks::class, 'buttons_id');
    }

}
