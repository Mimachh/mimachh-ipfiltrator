<?php

namespace Mimachh\IpFiltrator;

use Illuminate\Support\ServiceProvider;
use Mimachh\IpFiltrator\Http\Middleware\FiltratorMiddleware;

class IpFiltratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */

    public function boot()
    {
        
        // // Charger les seeders
        // $this->publishes([
        //     __DIR__ . '/./database/seeders' => database_path('seeders'),
        // ], 'guardians-seeders');

        $this->publishes([
            __DIR__ . '/./config/ipfiltrator.php' => config_path('ipfiltrator.php'),
        ], 'ipfiltrator-config');


        $router = $this->app['router'];
        $router->aliasMiddleware('ipFiltrator', FiltratorMiddleware::class);
        
    }

    public function register()
    {
        //
    }
}
