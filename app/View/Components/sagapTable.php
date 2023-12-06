<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Students;
use App\Models\Scholarships;

class sagapTable extends Component
{
    /**
     * Create a new component instance.
     */

    public $Students; 

    public function __construct()
    {
        $this->Students = Students::whereHas('scholarship', function ($query) {
            $query->where('name', 'SAGAP');
        })->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sagap-table');
    }
}
