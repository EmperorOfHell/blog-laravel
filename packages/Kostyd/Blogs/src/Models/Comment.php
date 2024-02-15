<?php

namespace Kostyd\Blogs\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected static function newFactory()
    {
        return \Kostyd\Blogs\Models\Factories\CommentFactory::new();
    }
}
