<?php

namespace kamruljpi\sitesettings\providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class SiteSettingsServiceProvider extends ServiceProvider
{
    protected $namespace = 'kamruljpi\sitesettings\controllers';
    /**
     * Register services.
     *
     * @return void
    */
    public function register()
    {

    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'sitesettings');
        parent::boot();
    }
    public function map()
    {
        Route::prefix('kamruljpi')
             ->namespace($this->namespace)
             ->group(__DIR__.'/../routes/web.php');
    }
}
