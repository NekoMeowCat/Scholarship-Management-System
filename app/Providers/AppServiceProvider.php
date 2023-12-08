<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\Components\DashboardFirstMenu;
use Illuminate\Support\Facades\Blade;
use App\Models\Students;
use App\Observers\UserActivityObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Students::observe(UserActivityObserver::class);
    }
}
