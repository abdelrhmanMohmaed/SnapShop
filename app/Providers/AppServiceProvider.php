<?php

namespace App\Providers;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        view()->composer('*', function ($view) {

            $view->with('departments',  Department::active()->take(11)->get());
        });

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();

        $loader->alias('Debugbar', \Barryvdh\Debugbar\Facades\Debugbar::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Model::shouldBeStrict(! $this->app->isProduction());
    }
}
