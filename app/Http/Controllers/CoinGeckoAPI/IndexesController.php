<?php

namespace App\Http\Controllers\CoinGeckoAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class IndexesController extends Controller
{
    public function getIndexes(array $params = []): array
    {
        $client = new CoinGecko();
        $data = $client->indexes()->getIndexes($params);

        return $data;
    }

    public function getIndexesMarketId(string $marketId, string $id): array
    {
        $client = new CoinGecko();
        $data = $client->indexes()->getIndexesMarketId($marketId, $id, $params);

        return $data;
    }

    public function getIndexesList(): array
    {
        $client = new CoinGecko();
        $data = $client->indexes()->getIndexesList();
        foreach ($data as $item) {
          echo print_r($item);
        }

        return $data;
    }
}
