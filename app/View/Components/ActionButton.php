<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButton extends Component
{
    public string $content;
    public string $buttonType;

    /**
     * Create a new component instance.
     */
    public function __construct(public string $type, public string $href)
    {
        if ($type === 'add') {
            $this->content = __('keywords.add_new');
            $this->buttonType = 'primary';
        } elseif ($type === 'edit') {
            $this->content = '<i class="fe fe-edit fa-2x"></i>';
            $this->buttonType = 'success';
        } elseif ($type === 'show') {
            $this->content = '<i class="fe fe-eye fa-2x"></i>';
            $this->buttonType = 'primary';
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-button');
    }
}
