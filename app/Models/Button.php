<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
    protected $fillable = [
        'name_button',
        'icon',
        'color_hex',
    ];

    use HasFactory;
}
