<?php

namespace App\Http\Controllers\CoinGeckoAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class ContractController extends Controller
{
    public function getContract(string $id, string $contractAddress): array
    {
        $client = new CoinGecko();
        $data = $client->contract()->getContract($id, $contractAddress);
        foreach ($data as $item) {
          echo print_r($item);
        }

        return [];
    }

    public function getContractMarketData(string $id, string $contractAddress, string $currency, string $days): array
    {
        $client = new CoinGecko();
        $data = $client->contract()->getContractMarketData($id, $contractAddress, $currency, $days);
        foreach ($data as $item) {
          echo print_r($item);
        }

        return [];
    }

    public function getContractMarketChartRange(string $id, string $contractAddress, string $currency, string $to, string $from, array $params = []): array
    {
        $client = new CoinGecko();
        $unixTSfrom = (string) strtotime($from);
        $unixTSTo = (string) strtotime($to);
        $data = $client->contract()->getContractMarketChartRange($id, $contractAddress, $currency, $unixTSTo, $unixTSfrom, []);
        foreach ($data as $item) {
          echo print_r($item);
        }

        return [];
    }
}
