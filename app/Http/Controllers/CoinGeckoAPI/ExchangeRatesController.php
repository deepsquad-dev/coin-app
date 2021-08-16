<?php

namespace App\Http\Controllers\CoinGeckoAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class ExchangeRatesController extends Controller
{
    public function getExchangeRates(): array
    {
        $client = new CoinGecko();
        $data = $client->exchangeRates()->getExchangeRates();

        return $data;
    }
}
