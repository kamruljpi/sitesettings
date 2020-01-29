<?php

namespace maxpro\sitesettings;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class SiteSettingsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
    */
    public function register()
    {
        include __DIR__.'/web.php';
        $this->app->make('maxpro\sitesettings\SiteSettingsController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
