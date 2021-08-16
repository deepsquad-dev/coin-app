<?php

namespace App\Http\Controllers\CoinGeckoAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class GlobalsController extends Controller
{
    public function getGlobals(): array
    {
        $client = new CoinGecko();
        $data = $client->globals()->getGlobals();

        return $data;
    }

    public function getGlobalsDEFI(): array
    {
        $client = new CoinGecko();
        $data = $client->globals()->getGlobalsDEFI();

        return $data;
    }
}
