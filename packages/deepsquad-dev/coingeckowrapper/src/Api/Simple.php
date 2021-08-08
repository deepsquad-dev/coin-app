<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Api;

use Exception;

class Simple extends Api
{
  public function getSimplePrice(array $ids = [], array $currencies = [], array $params = []): array
  {
      $params['ids'] = $ids;
      $params['vs_currencies '] = $currencies;

      return $this->get('/simple/price', $params);
  }

  public function getSimpleTokenPrice(string $id, array $contractAddresses = [], array $currencies = [], array $params = []): array
  {
    $params['contract_addresses'] = $contractAddresses;
    $params['vs_currencies '] = $currencies;

      return $this->get('/simple/token_price/' . $id, $params);
  }

  public function getSimpleSupportVsCurrences(): array
  {
      return $this->get('/simple/supported_vs_currencies');
  }
}
