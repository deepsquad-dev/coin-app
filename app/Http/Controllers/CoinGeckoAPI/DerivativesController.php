<?php

namespace App\Http\Controllers\CoinGeckoAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class DerivativesController extends Controller
{
  public function getDerivatives(array $params = []): array
  {
      $client = new CoinGecko();
      $data = $client->derivatives()->getDerivatives([]);
      foreach ($data as $item) {
        echo print_r($item);
      }
      
      return $data;
  }

  public function getDerivativesExchanges(array $params = []): array
  {
      $client = new CoinGecko();
      $data = $client->derivatives()->getDerivativesExchanges([]);

      return $data;
  }

  public function getDerivativesExchangesByID(string $id, array $params = []): array
  {
      $client = new CoinGecko();
      $data = $client->derivatives()->getDerivativesExchangesByID($id, []);

      return $data;
  }

  public function getDerivativesExchangesList(): array
  {
      $client = new CoinGecko();
      $data = $client->derivatives()->getDerivativesExchangesList([]);

      return $data;
  }
}
