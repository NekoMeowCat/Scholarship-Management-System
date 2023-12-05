<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Scholarships;
use App\Models\Departments;

class newScholar extends Component
{
    /**
     * Create a new component instance.
     */

    public $scholarships;
    public $departments;

    public function __construct()
    {
        $this->scholarships = Scholarships::distinct('name')->get();
        $this->departments = Departments::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.new-scholar');
    }
}
