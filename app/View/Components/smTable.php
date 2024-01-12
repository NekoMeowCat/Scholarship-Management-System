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
        $this->students = Students::whereIn('id', function ($query) {
            $query->selectRaw('MAX(id)')
                ->from('students')
                ->where('students.scholarship_id', '=', function ($subQuery) {
                    $subQuery->select('id')
                                ->from('scholarships')
                                ->where('name', 'SM City');
                })
                ->groupBy('id_number');
        })
        ->orderBy('year_level', 'desc')
        ->get()
        ->map(function ($student) {
            return $student->fresh();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sm-table');
    }
}
