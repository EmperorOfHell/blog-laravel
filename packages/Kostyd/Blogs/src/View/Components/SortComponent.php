<?php

namespace Kostyd\Blogs\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SortComponent extends Component
{
    public $sorting;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->sorting = [
            'title' => 'title',
            'created_at' => 'latest created',
            'updated_at' => 'latest updated'
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('blogs::components.sort');
    }
}
