<?php

namespace Kostyd\Blogs\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Kostyd\Blogs\Models\Blog;

class BlogComponent extends Component
{
    public $posts;
    public function __construct($posts)
    {
        $this->posts = $posts;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('blogs::components.blog');
    }
}
