<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperPost
 */
class Post extends Model
{
    use HasFactory;
    public function comment()
    {
        return $this->hasMany(Comment::class,'posts_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'users_id');
    }
}
