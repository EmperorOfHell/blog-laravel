<?php

namespace Kostyd\Blogs\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'updated_at', 'created_at'];
    protected static function newFactory()
    {
        return \Kostyd\Blogs\Models\Factories\CategoryFactory::new();
    }
}
