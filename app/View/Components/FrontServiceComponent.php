<?php

namespace App\View\Components;

use App\Models\Service;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class FrontServiceComponent extends Component
{
    public Collection $services;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->services = Service::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front-service-component');
    }
}
