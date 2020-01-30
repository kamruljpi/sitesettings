<?php

namespace kamruljpi\sitesettings\providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class SiteSettingsRouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'kamruljpi\sitesettings\controllers';
    public function register()
    {

    }
    public function boot()
    {
        parent::boot();
    }
    public function map()
    {
        Route::prefix('kamruljpi')
             ->namespace($this->namespace)
             ->group(__DIR__.'/../routes/web.php');
    }
}
