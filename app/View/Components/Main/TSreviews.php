<?php

namespace App\View\Components\main;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TSreviews extends Component
{
    /**
     * Create a new component instance.
     */
    public $rev;
    public function __construct($rev)
    {
        $this->rev = $rev;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.t-sreviews');
    }
}
