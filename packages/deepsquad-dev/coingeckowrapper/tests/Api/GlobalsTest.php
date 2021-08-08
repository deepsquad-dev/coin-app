<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Tests\Api;

use DeepsquadDev\Coingeckowrapper\Api\Globals;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class GlobalsTest extends ApiTestCase
{
    private function createApi(): Globals
    {
        return new Globals(new CoinGecko($this->getMockClient()));
    }

    public function testGetGlobals()
    {
        $this->createApi()->getGlobals();

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/global',
          $request->getUri()->__toString();
        );
    }

    public function testGetGlobalsDEFI()
    {
        $this->createApi()->getGlobalsDEFI();

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/global/decentralized_finance_defi',
          $request->getUri()->__toString();
        );
    }
}
