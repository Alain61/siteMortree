<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

abstract class AbstractLayout extends Component
{
    /**
     * Create a new component instance.
     */
    
    public function __construct(public string $name = '', public ?string $category = null, public ?string $tag = null)
    {   
        $this->name = config('app.name').
        ($category ? " | $category" : ($tag ? " | $tag" : ($name ? " | $name" :'')));
    }
}    

