<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperComment
 */
class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'user_id',
        'posts_id',
    ];
    public function posts()
    {
        return $this->hasOne(Post::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
