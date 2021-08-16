<?php

namespace App\Http\Controllers\CoinGeckoAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class TrendingController extends Controller
{
    public function getTrending(): array
    {
        $client = new CoinGecko();
        $data = $client->trending()->getTrending($params);

        return $data;
    }
}
