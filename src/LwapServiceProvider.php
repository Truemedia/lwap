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
        $this->loadRoutesFrom( $this->base_path('routes/web.php') );
        $this->loadViewsFrom($this->resource_path('views'), 'lwap');
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
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
