<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $message;
    public $type;

    /**
     * Create a new component instance.
     */
    public function __construct($type=null)
    {
        $this->type = $type;
    }

    public function typeClass(): string
    {
        if ($this->type == "error")
        {
            return 'bg-red-600 text-white';
        }

        return 'bg-green-600 text-white';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
