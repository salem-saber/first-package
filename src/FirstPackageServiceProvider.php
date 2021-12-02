<?php

namespace Salem\FirstPackage;

use Illuminate\Support\ServiceProvider;

class FirstPackageServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routs/web.php');
        $this->loadViewsFrom(__DIR__.'/../views','salem');

        $this->publishes([
            __DIR__.'/../config/first_package.php' => config_path('first_package.php')
        ]);
    }

    public function register()
    {
        $this->app->singleton(FirstPackage::class,function (){
            return new FirstPackage();
        });
    }
}
