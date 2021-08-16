<?php

namespace App\Http\Controllers\CoinGeckoAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class StatusUpdatesController extends Controller
{
    public function getStatusUpdates(array $params = []): array
    {
        $client = new CoinGecko();
        $data = $client->statusUpdates()->getStatusUpdates($params);

        return $data;
    }
}
