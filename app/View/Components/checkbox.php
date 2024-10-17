<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class checkbox extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $label = 'Se souvenir de moi',
        public string $type = 'checkbox', 
        public string $name = 'remember',
        public string $class = 'form-checkbox',  
        public string $id = 'inputcheck'
    )
    {
       
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.checkbox');
    }
}
