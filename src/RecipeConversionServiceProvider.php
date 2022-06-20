<?php

namespace Reno\RecipeConversion;

use Illuminate\Support\ServiceProvider;

class RecipeConversionServiceProvider extends ServiceProvider
{
    /**
     * Indicate not to defer loading of this provider.
     *
     * @var boolean
     */
    protected $defer = false;
    
    /**
     * Register the conversion service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('recipe-conversion', function ($app) {
            return new RecipeConversion;
        });
    }

    /**
     * Return the services provided by the conversion provider.
     *
     * @return void
     */
    public function provides()
    {
        return ['recipe-conversion'];
    }
}
