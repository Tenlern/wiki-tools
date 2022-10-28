<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Gift extends Model
{
    use HasFactory;

    protected $table = 'gifts';

    protected $casts = [
        'system' => 'array',
        'description' => 'array',
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'gift_tag', 'gift_id', 'tag_id');
    }

}
