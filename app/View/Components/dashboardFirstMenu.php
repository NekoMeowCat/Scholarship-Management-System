<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Students;

class dashboardFirstMenu extends Component
{
    /**
     * Create a new component instance.
     */
    public $count;
    public $countVerified;
    public $countUnverified;

    public function __construct()
    {
        $this->count = Students::count();
        $this->countVerified = Students::where('status', 'verified')->count();
        $this->countUnverified = Students::where('status', 'not_verified')->count();
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard-first-menu');
    }
}
