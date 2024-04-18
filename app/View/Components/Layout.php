<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $name = '', public ?string $category = null, public ?string $tag = null)
    {
        $this->name = config('app.name');
        
        if($category){
            $this->name .= " | $this->category";
        }
        elseif($tag){
            $this->name .= " | $this->tag";
        }
        elseif($name){
            $this->name .= " | $name" ;
        } 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.default');
    }
}
