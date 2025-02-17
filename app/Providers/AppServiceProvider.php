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
        Model::preventLazyLoading(); //* This line below prevents lazy loading and will throw an error if you try to use it, you need to use the with() method to load the relationship (eager loading)

        // Paginator::useBootstrapFive(); //* This line is used to change the default pagination style to Bootstrap 5.
        // Model::unguard(); //* This line is used to disable mass assignment protection.
    }
}
