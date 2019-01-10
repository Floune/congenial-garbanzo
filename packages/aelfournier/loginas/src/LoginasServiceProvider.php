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
        $this->publishes([
            __DIR__ . '/config/loginas.php' => config_path('loginas.php'),
        ]);
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
