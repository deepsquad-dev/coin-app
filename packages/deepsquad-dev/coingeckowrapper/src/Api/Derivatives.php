<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Api;

use Exception;

class Derivatives extends Api
{
      public function getDerivatives(array $params = []): array
      {
          return $this->get('/derivatives', $params);
      }

      public function getDerivativesExchanges(array $params = []): array
      {
          return $this->get('/derivatives/exchanges', $params);
      }

      public function getDerivativesExchangesByID(string $id, array $params = []): array
      {
          return $this->get('/derivatives/exchanges/' . $id, $params);
      }

      public function getDerivativesExchangesList(): array
      {
          return $this->get('/derivatives/exchanges/list');
      }
}
