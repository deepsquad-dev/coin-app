<?php

namespace App\Http\Controllers\CoinGeckoAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class PublicTreasuryController extends Controller
{
  public function getPublicTreasury(string $coinId): array
  {
      $client = new CoinGecko();
      $data = $client->publicTreasury()->getPublicTreasury($coinId);

      return $data;
  }
}
