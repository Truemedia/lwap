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
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
