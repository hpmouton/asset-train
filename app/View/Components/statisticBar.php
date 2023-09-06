<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class statisticBar extends Component
{
    /**
     * Create a new component instance.
     */
    public $assets;
    public function __construct($assets)
    {
        //
        $this->assets = $assets;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.statistic-bar');
    }
}
