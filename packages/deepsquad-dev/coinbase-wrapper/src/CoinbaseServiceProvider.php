<?php

namespace DeepsquadDev\CoinbaseWrapper;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CoinbaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/coinbase.php', 'coinbase'
        );

        $this->app->bind('coinbase', function ($app) {
            return new Coinbase($app);
        });

        $this->app->alias('coinbase', Coinbase::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/coinbase.php' =>config_path('coinbase.php'),
        ], 'config');

        $timestamp = date('Y_m_d_His', time());
        
        $this->publishes([
            __DIR__.'/../database/migrations/create_webhook_calls_table.php.stub' 
                => database_path("migrations/{$timestamp}_create_webhook_calls_table.php"),
        ], 'config');
        
        $this->loadRoutesFrom(__DIR__.'/Routes/api.php');
    }
}
