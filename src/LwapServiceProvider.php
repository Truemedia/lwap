<?php namespace Truemedia\Lwap;

use Illuminate\Support\ServiceProvider;
use Truemedia\Lwap\App\Http\ViewComposers\LayoutComposer;
use View;

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

        $this->loadMigrationsFrom( $this->database_path('migrations') );
        $this->loadRoutesFrom( $this->base_path('routes/web.php') );
        $this->loadViewsFrom($this->resource_path('views'), 'lwap');

        View::composer('lwap::layouts.basic', LayoutComposer::class);

        $this->publishes([$this->resource_path('assets/sass') => resource_path('assets/sass')], 'assets');
        $this->publishes([$this->config_path('site.php') => config_path('site.php')], 'config');
        $this->publishes([$this->database_path('seeds') => database_path('seeds')], 'seeds');
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
      * Package - config path
      */
    private function config_path($path)
    {
        return $this->base_path("config/${path}");
    }

    /**
      * Package - database path
      */
    private function database_path($path)
    {
        return $this->base_path("database/${path}");
    }

    /**
      * Package - resource path
      */
    private function resource_path($path)
    {
        return $this->base_path("resources/${path}");
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
