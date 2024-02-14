<?php

namespace Kostyd\Blogs\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Kostyd\Blogs\Contracts\FilterRequestInterface;
use Kostyd\Blogs\Http\Request\FilterRequest;

class SortComponent extends Component
{
    public $sorting;
    public $req;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->sorting = [
            'title' => 'title',
            'created_at' => 'created date',
            'updated_at' => 'updated date'
        ];
        $this->req = request();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('blogs::components.sort');
    }
}
