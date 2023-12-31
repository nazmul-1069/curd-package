<?php 
namespace humaneye\Simplecurd;

use Illuminate\Support\ServiceProvider;

class CurdServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','curd');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        
    }

    public function register()
    {

    }
}