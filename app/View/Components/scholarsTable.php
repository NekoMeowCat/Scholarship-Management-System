<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Students;

class scholarsTable extends Component
{
    /**
     * Create a new component instance.
     */

    public $students;

    public function __construct()
    {
        $this->students = Students::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.scholars-table');
    }
}