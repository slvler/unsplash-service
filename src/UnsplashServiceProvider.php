<?php


namespace Slvler\UnsplashService;

use Illuminate\Support\ServiceProvider;

class UnsplashServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/unsplash.php' => config_path('unsplash.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/unsplash.php', 'unsplash');

        $this->app->bind('unsplash', function($app) {
            return new Unsplash();
        });
    }
}
