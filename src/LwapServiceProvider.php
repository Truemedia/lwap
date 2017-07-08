<?php namespace Truemedia\Lwap;

use Illuminate\Support\ServiceProvider;

class LwapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom($this->config_path('site.php'), 'site');

        $this->loadRoutesFrom( $this->base_path('routes/web.php') );
        $this->loadViewsFrom($this->resource_path('views'), 'lwap');

        $this->publishes([$this->config_path('site.php') => config_path('site.php')], 'config');
        $this->publishes([$this->resource_path('assets/sass') => resource_path('assets/sass')], 'assets');
    }

    /**
      * Package - base path
      */
    private function base_path($path)
    {
        $base = __DIR__;
        return "${base}/${path}";
    }

    /**
      * Package - resource path
      */
    private function resource_path($path)
    {
        return $this->base_path("resources/${path}");
    }

    /**
      * Package - config path
      */
    private function config_path($path)
    {
        return $this->base_path("config/${path}");
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
