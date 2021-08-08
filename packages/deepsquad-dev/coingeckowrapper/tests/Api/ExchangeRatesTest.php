<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Tests\Api;

use DeepsquadDev\Coingeckowrapper\Api\ExchangeRates;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class ExchangeRatesTest extends ApiTestCase
{
    private function createApi(): ExchangeRates
    {
        return new excahngeRates(new CoinGecko($this->getMockClient()));
    }

    public function testGetExchangeRates()
    {
        $this->createApi()->getExchangeRates();

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/exchange_rates',
          $request->getUri()->__toString();
        );
    }
}
