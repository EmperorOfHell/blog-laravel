<?php

namespace KostyD\Blogs\Http\Controllers;

use App\Http\Controllers\Controller;
use Kostyd\Blogs\Http\Request\FilterRequest;
use Kostyd\Blogs\Models\Blog;

class BlogController extends Controller{
    public function index()
    {
        return view("blogs::blogs.index",[
            'blogs' => Blog::filter(request(['category']))->sort(request(['sort']))->paginate(5)->withQueryString(),
        ]);
    }
    public function show(Blog $blog)
    {
        return view("blogs::blogs.show",[
            'blog' => $blog,
            ]);
    }
}
