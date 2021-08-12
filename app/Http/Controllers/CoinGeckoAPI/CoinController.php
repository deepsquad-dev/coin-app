<?php

namespace App\Http\Controllers\CoinGeckoAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class CoinController extends Controller
{
  public function getCoinList(): array
  {
      $client = new CoinGecko();
      $data = $client->coins()->getList();
      foreach ($data as $item) {
        echo print_r($item);
      }

      return [];
  }

  public function getMarkets(string $currency, array $params): array
  {
      $client = new CoinGecko();
      //$currency = "btc";
      $data = $client->coins()->getMarkets($currency, []);
      foreach ($data as $item) {
        echo print_r($item);
      }

      return $data;
  }

  public function getACoin(string $id, array $params = []): array
  {
      $client = new CoinGecko();
      //$id = "bitcoin";

      $data = $client->coins()->getCoin($id, []);
      foreach ($data as $item) {
        echo print_r($item);
      }

      return $data;
  }

  public function getCoinTickers(string $id, array $params = []): array
  {
      $client = new CoinGecko();
      //$id = "bitcoin";

      $data = $client->coins()->getTickers($id, []);
      foreach ($data as $item) {
        echo print_r($item);
      }
      return [];
  }

  public function getCoinHistory(string $id, string $date, $params = []): array
  {
      $client = new CoinGecko();
      //$id = "ethereum";
      //$date = "30-12-2017";
      $data = $client->coins()->getHistory($id, $date, []);

      return $data;
  }

  public function getCoinMarketChart(string $id, string $currency, string $days): array
  {
      $client = new CoinGecko();
      $data = $client->coins()->getMarketChart($id, $currency, $days);

      return $data;
  }

  public function getCoinMarketChartRange(string $id, string $currency, string $from, string $to): array
  {
      $client = new CoinGecko();
      // from and to dates must be unix timestamps
      $unixTSfrom = (string) strtotime($from);
      $unixTSTo = (string) strtotime($to);
      $data = $client->coins()->getMarketChartRange($id, $currency, $unixTSfrom, $unixTSTo);
      foreach ($data as $item) {
        echo print_r($item);
      }

      return [];
  }

  public function getSingleCoinStatusUpdates(string $id, array $params = []): array
  {
      $client = new CoinGecko();
      $data = $client->coins()->getCoinStatusUpdates($id, $params);

      return $data;
  }


  public function getSingleCoinOHLC(string $id, string $currency, string $days, array $params = []): array
  {
      $client = new CoinGecko();
      $data = $client->coins()->getCoinOHLC($id, $currency, $days, $params);

      return $data;
  }

  public function getCoinCategoriesList(): array
  {
      $client = new CoinGecko();
      $data = $client->coins()->getCoinCategoriesList();
      foreach ($data as $item) {
        echo print_r($item);
      }

      return [];
  }

  public function getCoinCategories(array $params = []): array
  {
    $client = new CoinGecko();
    $data = $client->coins()->getCoinCategories([]);
    foreach ($data as $item) {
      echo print_r($item);
    }

    return [];
  }
}
