<?php

namespace App\Http\Controllers\CoinGeckoAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class EventsController extends Controller
{
  public function getEvents(array $params = []): array
  {
      $client = new CoinGecko();
      $data = $client->events()->getEvents([]);

      return $data;
  }

  public function getEventsCountries(): array
  {
      $client = new CoinGecko();
      $data = $client->events()->getEventsCountries();

      return $data;
  }

  public function getEventTypes(): array
  {
    $client = new CoinGecko();
    $data = $client->events()->getEventTypes();

    return $data;
  }
}
