<?php

namespace DeepsquadDev\CoinmarketcapWrapper\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

class CoinMarketCapServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('coinmarketapi', function() {
            return new Api();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $config = realpath(__DIR__.'/config/coinmarketcap.php');

        $this->publishes([
            $config => config_path('coinmarketcap.php')
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['coinmarketcap'];
    }
}
