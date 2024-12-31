<?php

namespace Flooris\Prestashop;

use Illuminate\Support\ServiceProvider;

class PrestashopServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //        $factory = $this->app->make(Factory::class);
        //
        //        require __DIR__ . '/database/factories/ModelFactory.php';
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/config/prestashop.php' => config_path('prestashop.php'),
        ]);
    }
}
