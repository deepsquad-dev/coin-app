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
        $this->publishes([
            __DIR__.'/../config/blockcypher.php' => config_path('blockcypher.php'),
        ], 'config');

        $timestamp = date('Y_m_d_His', time());
        
        $this->publishes([
            __DIR__.'/../database/migrations/create_blockcypher_webhook_calls_table.php.stub' 
                => database_path("migrations/{$timestamp}_create_blockcypher_webhook_calls_table.php"),
        ], 'config');
        
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');

    }
}
