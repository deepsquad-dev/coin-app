<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Tests\Api;

use DeepsquadDev\Coingeckowrapper\Api\Derivatives;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class DerivativesTest extends ApiTestCase
{
    private function createApi(): Derivatives
    {
        return new Derivatives(new CoinGecko($this->getMockClient()));
    }

    public function testGetDerivatives()
    {
        $this->createApi()->getDerivatives();

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/derivatives',
          $request->getUri()->__toString();
        );
    }

    public function testGetDerivativesExchanges()
    {
        $this->createApi()->getDerivativesExchanges();

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/derivatives/exchanges',
          $request->getUri()->__toString();
        );
    }

    public function getDerivativesExchangesByID()
    {
        $this->createApi()->getDerivativesExchangesByID('binance_futures');

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/derivatives/exchanges/binance_futures',
          $request->getUri()->__toString();
        );
    }

    public function getDerivativesExchangesList(): array
    {
        $this->createApi()->getDerivatives();

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/derivatives/exchanges/list',
          $request->getUri()->__toString();
        );
    }

}
