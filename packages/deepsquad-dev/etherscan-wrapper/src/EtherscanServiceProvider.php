<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EtherscanServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/etherscan.php', 'etherscan'
        );

        $this->app->bind('etherscan', function ($app) {
            return new Etherscan($app);
        });

        $this->app->alias('etherscan', Etherscan::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/etherscan.php' =>config_path('etherscan.php'),
        ], 'config');

        $timestamp = date('Y_m_d_His', time());
        
        $this->publishes([
            __DIR__.'/../database/migrations/create_etherscan_webhook_calls_table.php.stub' 
                => database_path("migrations/{$timestamp}_create_etherscan_webhook_calls_table.php"),
        ], 'config');
        
        $this->loadRoutesFrom(__DIR__.'/Routes/api.php');

    }
}
