<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Microsite extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function social(): HasMany
    {
        return $this->hasMany(Social::class);
    }
    public function component(): BelongsTo
    {
        return $this->belongsTo(Components::class, 'components_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
