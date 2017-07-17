<?php

namespace Flooris\Prestashop;

use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\ServiceProvider;

class PrestashopServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/prestashop.php' => config_path('prestashop.php'),
        ]);
    }

    public function register()
    {
        $factory = $this->app->make(Factory::class);

        require __DIR__ . '/database/factories/ModelFactory.php';
    }
}
