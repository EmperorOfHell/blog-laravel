<?php

namespace Kostyd\Blogs\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Blog extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        foreach ($filters as $name => $value){
            $query->whereHas($name, fn($query) => $query->whereIn('name', $value));
        }
    }
    public function scopeSort($query, array $sorting)
    {
        foreach ($sorting as $value){
            $query->orderBy($value);
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    protected static function newFactory()
    {
        return \Kostyd\Blogs\Models\Factories\BlogFactory::new();
    }
}
