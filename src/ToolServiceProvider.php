<?php

namespace jarda256\NovaCollapsableNavigation;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views/nova-overrides', 'nova');

        Nova::serving(function (ServingNova $event) {
            Nova::script('collapsable-navigation', __DIR__ . '/../dist/js/tool.js');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
