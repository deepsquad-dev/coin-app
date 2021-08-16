<?php

namespace App\Http\Controllers\CoinGeckoAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class FinanceController extends Controller
{
    public function getFinancePlatforms(array $params = []): array
    {
        $client = new CoinGecko();
        $data = $client->finance()->getFinancePlatforms();

        return $data;
    }

    public function getFinanceProducts(array $params = []): array
    {
        $client = new CoinGecko();
        $data = $client->finance()->getFinanceProducts();

        return $data;
    }
}
