<?php 

namespace DeepsquadDev\CoinbaseWrapper\Facades;

use Illuminate\Http\Facade;

class Coinbase extends Facade 
{
    /**
     * 
     */
    protected static function getFacadeAccessor()
    {
        return 'coinbase';
    }
}