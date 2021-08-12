<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Api;

use Exception;

class Simple extends Api
{
  public function getSimplePrice(string $ids, string $currencies, array $params = []): array
  {
      // comma separated lists
      $params['ids'] = $ids;
      $params['vs_currencies'] = $currencies;

      return $this->get('/simple/price', $params);
  }

  public function getSimpleTokenPrice(string $id, string $contractAddresses, string $currencies, array $params = []): array
  {
      // comma separated lists
      $params['contract_addresses'] = $contractAddresses;
      $params['vs_currencies'] = $currencies;
       
      return $this->get('/simple/token_price/' . $id, $params);
  }

  public function getSimpleSupportedVsCurrences(): array
  {
      return $this->get('/simple/supported_vs_currencies');
  }
}
