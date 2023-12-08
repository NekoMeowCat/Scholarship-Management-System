<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Students;
use App\Models\Scholarships;

class tesdaTable extends Component
{
    /**
     * Create a new component instance.
     */
    public $students;

    public function __construct()
    {
        $this->students = Students::whereHas('scholarship', function ($query) {
            $query->where('name', 'TESDA');
        })->orderBy('year_level', 'desc')->get();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tesda-table');
    }
}
