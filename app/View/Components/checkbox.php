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
        public ?string $name = 'checkbox',
        public ?string $class = 'form-check-input',  
        public ?string $id = null
    )
    {
        $this->id ??= 'checkbox_' . uniqid(); 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.checkbox');
    }
}
