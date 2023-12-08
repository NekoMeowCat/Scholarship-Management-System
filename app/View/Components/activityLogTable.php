<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Spatie\Activitylog\Models\Activity;
use App\Models\Students;


class activityLogTable extends Component
{
    /**
     * Create a new component instance.
     */

    public $activityLogs;

    public function __construct($activityLogs)
    {
        $this->activityLogs = $activityLogs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.activity-log-table');
    }
}
