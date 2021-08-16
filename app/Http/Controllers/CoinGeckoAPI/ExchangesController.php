<?php

namespace App\Http\Controllers\CoinGeckoAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class ExchangesController extends Controller
{
    public function getExchanges(array $params = []): array
    {
        $client = new CoinGecko();
        $data = $client->exchanges()->getExchanges([]);

        return $data;
    }

    public function getExchangesList(): array
    {
        $client = new CoinGecko();
        $data = $client->exchanges()->getExchangesList();

        return $data;
    }

    public function getExchangesVolume(string $id): array
    {
        $client = new CoinGecko();
        $data = $client->exchanges()->getExchangesVolume($id);

        return $data;
    }

    public function getExchangesTickers(string $id, array $params = []): array
    {
        $client = new CoinGecko();
        $data = $client->exchanges()->getExchangesTickers($id, $params);

        return $data;
    }

    // Exchange id
    public function getExchangeStatusUpdate(string $id, array $params = []): array
    {
        $client = new CoinGecko();
        $data = $client->exchanges()->getExchangeStatusUpdate($id, $params);

        return $data;
    }

    // Exchange id
    public function getExchangeVolumeChart(string $id, string $days): array
    {
        $client = new CoinGecko();
        $data = $client->exchanges()->getExchangeVolumeChart($id, $days);

        return $data;
    }
}
