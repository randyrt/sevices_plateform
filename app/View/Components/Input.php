<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $label,
        public ?string $id = null,
        public ?string $for = null,
        public string $type = 'text',
        public ?string $class = null,
        public ?string $placeholder = null
    )
    {
        
        $this->id = $this->id ?? 'input_' . uniqid(); 
        $this->class = $this->class ?? 'form-control'; // Classe par défaut
        $this->placeholder = $this->placeholder ?? 'Entrez votre ' . strtolower($label); // Placeholder par défaut basé sur le label
    }

    /** 
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
