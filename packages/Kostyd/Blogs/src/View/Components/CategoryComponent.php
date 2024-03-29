<?php

namespace Kostyd\Blogs\View\Components;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Kostyd\Blogs\Models\Category;

class CategoryComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $category;
    public $filters;
    public function __construct()
    {
        $this->category = Category::all();
        $this->filters = request()->collect('category')->toArray();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('blogs::components.category');
    }
}
