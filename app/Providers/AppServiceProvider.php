<?php

namespace App\Providers;

use App\Models\Package;
use Illuminate\Support\ServiceProvider;
use View;

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
        public function boot()
    {
        // Fetch all packages and share with all views
        $packages = Package::all();  
        View::share('packages', $packages);
    }
}
