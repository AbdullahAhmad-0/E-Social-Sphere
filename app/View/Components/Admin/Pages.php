<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Pages extends Component
{
    /**
     * Create a new component instance.
     */
    public $items;
    public function __construct($data)
    {
        $this->items = $data;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.pages');
    }
}
