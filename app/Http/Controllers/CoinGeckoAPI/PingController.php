<?php

namespace App\Http\Controllers\CoinGeckoAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class PingController extends Controller
{
    public function ping()
    {
        $client = new CoinGecko();
        $data = $client->ping();
        //dd($data);
        return $data;
        //return new CoinGecko()->ping();
    }
}
