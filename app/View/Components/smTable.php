<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Students;
use App\Models\Scholarships;

class smTable extends Component
{
    /**
     * Create a new component instance.
     */

    public $students;

    public function __construct()
    {
        $this->Students = Students::whereHas('scholarship', function ($query) {
            $query->where('name', 'SM');
        })->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sm-table');
    }
}