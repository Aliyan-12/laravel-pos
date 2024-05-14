<?php
namespace CodeWave\Backend;

class BackendServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__."\\Config\\backend.php", "backend");
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__."\\Routes\\web.php");
        $this->loadViewsFrom(__DIR__."\\Resources\\Views\\", 'backend');
    }
}