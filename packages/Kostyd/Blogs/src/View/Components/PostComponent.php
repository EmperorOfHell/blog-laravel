<?php

namespace Kostyd\Blogs\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Kostyd\Blogs\Models\Blog;

class PostComponent extends Component
{
    public Blog $item;
    public function __construct($item)
    {
        $this->item = $item;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('blogs::components.post-card');
    }
}
