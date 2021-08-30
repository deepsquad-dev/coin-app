<?php

namespace DeepsquadDev\Blockcypherapis;;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BlockcypherProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/blockcypher.php', 'blockcypher'
        );

        $this->app->bind('blockcypher', function ($app) {
            return new Blockcypher($app);
        });

        $this->app->alias('blockcypher', Blockcypher::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
