<?php

namespace KostyD\Blogs\Http\Controllers;

use App\Http\Controllers\Controller;
use Kostyd\Blogs\Models\Blog;

class BlogController extends Controller{
    public function index()
    {
        return view("blogs::blogs.index",[
            'blogs' => Blog::paginate(5),
        ]);
    }
}
