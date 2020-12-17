<?php

namespace edgewizz\laws;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LawsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edgewizz\Laws\Controllers\LawsController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd($this);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__ . '/components', 'laws');
        Blade::component('laws::laws.open', 'laws.open');
        Blade::component('laws::laws.index', 'laws.index');
        Blade::component('laws::laws.edit', 'laws.edit');
    }
}
