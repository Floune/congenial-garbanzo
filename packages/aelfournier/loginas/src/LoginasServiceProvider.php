<?php

namespace Aelfournier\Loginas;

use Illuminate\Support\ServiceProvider;

class LoginasServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'loginas');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}