<?php

namespace App\View\Components\main;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public $acttabn;
    public $header;
    public $h1;
    public function __construct($acttab = null, $header = null, $h1 = null)
    {
        $this->acttabn = $acttab;
        $this->header = $header;
        $this->h1 = $h1;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.header');
    }
}
