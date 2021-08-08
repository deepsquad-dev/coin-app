<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Api;

use Exception;

class Coins extends Api
{

  public function getList(): array
  {
      return $this->get('/coins/list');
  }

  public function getMarkets(string $currency, array $params = []): array
  {
      $params['vs_currency'] = $currency;

      return $this->get('/coins/markets', $params);
  }

  public function getCoin(string $id, array $params = []): array
  {
      return $this->get('/coins/', $id, $params);
  }

  public function getTickers(string $id, array $params = []): array
  {
      return $this->get('/coins/' . $id . '/tickers', $params);
  }

  public function getHistory(string $id, string $date, $params = []): array
  {
      $params['date'] = $date;

      return $this->get('/coins/' . $id . '/history', $params);
  }

  public function getMarketChart(string $id, string $currency, string $days): array
  {
      $params['vs_currency'] = $currency;
      $params['days'] = $days;

      return $this->get('/coins/' . $id . '/market_chart', $params);
  }

  public function getMarketChartRange(string $id, string $currency, string $from, string $to): array
  {
      $params['vs_currency'] = $currency;
      $params['from'] = $from;
      $params['to'] = $to;

      return $this->get('/coins/' . $id . '/market_chart', $params);
  }

  public function getCoinStateUpdates(string $id, array $params = []): array
  {
      return $this->get('/coins/' . $id . '/state_updates', $params);
  }

  public function getCoinOHLC(string $id, string $currency, string $days, array $params = []): array
  {
      $params['vs_currency'] = $currency;
      $params['days'] = $days;

      return $this->get('/coins/' . $id . '/ohlc', $params);
  }

  public function getCoinCategoriesList(): array
  {
      return $this->get('/coins/categories/list');
  }

  public function getCoinCategories(array $params = []): array
  {
      return $this->get('/coins/categories');
  }
}
