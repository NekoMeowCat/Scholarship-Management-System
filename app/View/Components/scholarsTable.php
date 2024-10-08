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
        $this->students = Students::whereIn('id', function ($query) {
            $query->selectRaw('MAX(id)')
                ->from('students')
                ->groupBy('id_number');
        })
        ->orderBy('year_level', 'desc')
        ->get()
        ->fresh(); // Use fresh() to ensure the latest data is fetched
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.scholars-table');
    }
}
