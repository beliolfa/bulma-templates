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

        $this->publishes([
            __DIR__.'/../templates/scaffold/controller' => resource_path('infyom/infyom-generator-templates/scaffold/controller')
        ], 'simplified-controller');
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
