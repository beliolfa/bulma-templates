<?php

namespace Disitec\BulmaTemplates;

use Illuminate\Support\ServiceProvider;

class BulmaTemplatesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'bulma-templates');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
