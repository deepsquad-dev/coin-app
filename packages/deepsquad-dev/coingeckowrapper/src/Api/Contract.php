<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Api;

use Exception;

class Contract extends Api
{
    public function getContract(string $id, string $contractAddress): array
    {
        return $this->get('/coins/' . $id . '/contract/',  $contractAddress);
    }

    public function getContractMarketData(string $id, string $contractAddress, string $currency, string $days): array
    {
        $params['vs_currency'] = $currency;
        $params['days'] = $days;

        return $this->get('/coins/' . $id . '/contract/' .  $contractAddress . '/market_chart/');
    }

    public function getContractMarketChartRange(string $id, string $contractAddress, string $currency, string $to, string $from, array $params = []): array
    {
      $params['vs_currency'] = $currency;
      $params['to'] = $to;
      $params['from'] = $from;

      return $this->get('/coins/' . $id . '/contract/' .  $contractAddress . '/market_chart/range', $params);
    }
}
