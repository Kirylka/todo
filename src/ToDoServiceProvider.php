<?php

namespace Kirylka\Todo;

use Illuminate\Support\ServiceProvider;

class ToDoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../src/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('to-do-manager', function ($app) {
            return new ToDoManager($app);
        });
    }
}
