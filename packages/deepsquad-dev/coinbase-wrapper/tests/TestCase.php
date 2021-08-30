<?php

namespace DeepsquadDev\CoinbaseWrapper\Tests;

use DeepsquadDev\CoinbaseWrapper\Facades\Coinbase;
use DeepsquadDev\CoinbaseWrapper\CoinbaseServiceProvider;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [ CoinbaseServiceProvider::class];
    }
    
    protected function getPackageAliases($app)
    {
        return [ Coinbase::class ]; 
    }

    protected function determineCoinbaseSignature(arry $payload): string
    {
        $secret = config('coinbase.webhookSecret');

        $signature = hash_hmac('sha256', json_encode($payload), $secret);

        return $signature;
    }
}
