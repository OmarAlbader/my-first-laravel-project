<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

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
        // This line below prevents lazy loading and will throw an error if you try to use it, you need to use the with() method to load the relationship (eager loading)
        Model::preventLazyLoading();

        // Paginator::useBootstrapFive();
    }
}
