<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class chedTable extends Component
{
    /**
     * Create a new component instance.
     */
    public $students;

    public function __construct()
    {
        $this->Students = Students::whereHas('scholarship', function ($query) {
            $query->where('name', 'CHED');
        })->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ched-table');
    }
}
