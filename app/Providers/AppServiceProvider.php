<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        //
        Paginator::useBootstrap();

        $settings=Setting::first();
        view::share('settings',$settings);
    }
}
