<?php namespace Sukohi\LaravelReadability;

use Illuminate\Support\ServiceProvider;

class LaravelReadabilityServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var  bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['laravel-readability'] = $this->app->share(function($app)
        {
            return new LaravelReadability;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel-readability'];
    }

}