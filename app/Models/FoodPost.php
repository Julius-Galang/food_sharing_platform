<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class FoodPost extends Model
{
    protected $fillable = [
        'Name',
        'Posted by',
        'Location',
        'Type',

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
