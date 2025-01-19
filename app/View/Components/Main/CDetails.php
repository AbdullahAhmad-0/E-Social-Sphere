<?php

namespace App\View\Components\main;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CDetails extends Component
{
    /**
     * Create a new component instance.
     */
    public $services;
    public $cmn;
    public $heading;
    public function __construct($ser=null, $cmn=null, $heading=null)
    {
        //
        $this->services = $ser;
        $this->cmn = $cmn;
        $this->heading = $heading;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.c-details');
    }
}
