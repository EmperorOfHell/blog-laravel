<?php

namespace Kostyd\Blogs\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected static function newFactory()
    {
        return \Kostyd\Blogs\Models\Factories\BlogFactory::new();
    }
}
