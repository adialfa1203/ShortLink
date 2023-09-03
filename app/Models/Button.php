<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Button extends Model
{
    protected $fillable = [
        'name_button',
        'icon',
        'color_hex',
    ];

    use HasFactory;
    // public function socials()
    // {
    //     return $this->hasMany(Social::class, 'button_id', 'buttons_id');
    // }
    public function buttonLinks()
    {
        return $this->hasMany(ButtonLinks::class, 'buttons_id');
    }
    
}
