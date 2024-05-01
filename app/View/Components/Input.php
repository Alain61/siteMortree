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
    public function __construct( //pour accéder aus différentes propriétés
        public string $name,
        public string $label,
        public ?string $value = null,
        public ?string $id = null,
        public string $type = 'text',
        public string $help = '',
    )
    {   
        //si l'id n'a pas été renseigné, on prend la valeur 'name' 
        $this->id ??= $this->name;
        // équivaut à: this->id = $this->id ?? $this->name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
