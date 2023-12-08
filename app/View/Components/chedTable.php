<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Students;

class chedTable extends Component
{
    /**
     * Create a new component instance.
     */
    public $students;

    public function __construct()
    {
        $this->students = Students::whereHas('scholarship', function ($query) {
            $query->where('name', 'CHED');
        })->orderBy('year_level', 'desc')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ched-table');
    }
}
