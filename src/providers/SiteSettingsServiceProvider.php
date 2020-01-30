<?php

namespace kamruljpi\sitesettings\providers;

use Illuminate\Support\ServiceProvider;

class SiteSettingsServiceProvider extends ServiceProvider
{
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
    }
}
