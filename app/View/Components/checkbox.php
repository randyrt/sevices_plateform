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
        public ?string $name = null,
        public ?string $class = null,  
        public ?string $id = null
    )
    {
      
        $this->class = $this->class ?? 'form-check-input'; 
        $this->id = $this->id ?? 'checkbox_' . uniqid(); 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.checkbox');
    }
}
