<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Account extends Component
{
    /**
     * Create a new component instance.
     */
    public $item;
    public function __construct($data)
    {
        $this->item = $data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.account');
    }
}
