<?php
namespace CodeWavePos\Config;

class ConfigServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__."\\Config\\config.php", "config");
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__."\\Routes\\web.php");
        $this->loadViewsFrom(__DIR__."\\Resources\\Views\\", 'config');
        $this->loadMigrationsFrom(__DIR__."\\Database\\Migrations\\");
    }
}