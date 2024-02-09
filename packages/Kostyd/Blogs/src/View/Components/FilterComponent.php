<?php

namespace Kostyd\Blogs\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FilterComponent extends Component
{
    public $filters;
    public $request;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->request = app('Kostyd\Blogs\Http\Request\FilterRequest');
        $this->filters = $this->request->all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('blogs::components.filters');
    }
}
