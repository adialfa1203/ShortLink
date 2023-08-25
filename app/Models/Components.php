<?php

namespace App\Models;

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
}
