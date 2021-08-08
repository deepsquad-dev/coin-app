<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Tests\Api;

use DeepsquadDev\Coingeckowrapper\Api\Finance;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class FinanceTest extends ApiTestCase
{
    private function createApi(): Finance
    {
        return new Finance(new CoinGecko($this->getMockClient()));
    }

    public function testGetFinancePlatforms()
    {
        $this->createApi()->getFinancePlatforms();

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/finance_platforms',
          $request->getUri()->__toString();
        );
    }

    public function testGetFinanceProducts()
    {
        $this->createApi()->getFinanceProducts();

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/finance_products',
          $request->getUri()->__toString();
        );
    }
}
