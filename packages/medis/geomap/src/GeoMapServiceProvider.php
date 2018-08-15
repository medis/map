<?php

namespace medis\geomap;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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

        Blade::directive('geomap', function() {
            return view('geomap::map');
        });
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

        // Register view.
        $this->loadViewsFrom(__DIR__.'/views', 'geomap');
    }
}
