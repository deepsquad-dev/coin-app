<?php

namespace App\Http\Controllers\CoinGeckoAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class SimpleController extends Controller
{
    public function getSupportedCurrencies()
    {
        $client = new CoinGecko();
        $data = $client->simple()->getSimpleSupportedVsCurrences();
        return $data;
    }

    public function getPrice(/** $ids, $currencies, $params */)
    {
        $client = new CoinGecko();
        $ids = 'ethereum,bitcoin';
        $currencies = 'usd,rub';
        $params['include_market_cap'] = true;
        $params['include_24hr_vol'] = true;
        $params['include_24hr_change'] = true;
        $params['include_last_updated_at'] = true;
        $data = $client->simple()->getSimplePrice($ids, $currencies, $params);

        return $data;
    }

    public function getTokenPrice(/*$id, $contractAddresses, $currencies, $params*/)
    {
      $client = new CoinGecko();
      $id = 'ethereum';
      $contractAddresses = '0xE41d2489571d322189246DaFA5ebDe1F4699F498';
      $currencies = 'usd,rub';
      $data = $client->simple()->getSimpleTokenPrice($id, $contractAddresses, $currencies, []);

      return $data;
    }
}
