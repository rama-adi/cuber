<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Thread extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function threadCategory(): BelongsTo
    {
        return $this->belongsTo(ThreadCategory::class);
    }

    public function threadReplies(): HasMany
    {
        return $this->hasMany(ThreadReply::class);
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'thread_likes')
            ->as('thread_likes')
            ->withTimestamps();
    }
}
