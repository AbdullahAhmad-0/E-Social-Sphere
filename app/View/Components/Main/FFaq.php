<?php

namespace App\View\Components\main;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FFaq extends Component
{
    /**
     * Create a new component instance.
     */
    public $faqs;
    public function __construct($faq)
    {
        //
        $this->faqs = $faq;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.f-faq');
    }
}
