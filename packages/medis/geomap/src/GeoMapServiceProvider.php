<?php

namespace medis\geomap;

use Illuminate\Support\ServiceProvider;

class GeoMapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Register controller.
        $this->app->make('medis\geomap\GeoController');
    }
}
