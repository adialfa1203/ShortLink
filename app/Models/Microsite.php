<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Microsite extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function getIncrementing()
    {
        return false;
    }
    public function getKeyType()
    {
        return 'string';
    }

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function($model){
    //         if($model->getKey() == null){
    //             $model ->setAttribute($model->getKeyName(), Str::uuid()->toString());
    //         }
    //     });
    // }

    public function social(): HasMany
    {
        return $this->hasMany(Social::class);
    }
    public function component(): BelongsTo
    {
        return $this->BelongsTo(Components::class, 'components_id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function shortUrl()
    {
        return $this->hasMany(ShortUrl::class, 'microsite_uuid', 'id');
    }
}
