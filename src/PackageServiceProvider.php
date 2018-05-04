<?php

namespace DevsWebDev\DevTube;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     */
    public function register()
    {
        $this->app->bind('devtube', function ($app) {
            return new DevTube;
        });
    }

    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
