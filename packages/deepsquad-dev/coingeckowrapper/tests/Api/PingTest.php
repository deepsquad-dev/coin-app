<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Tests\Api;

use DeepsquadDev\Coingeckowrapper\Api\Ping;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class PingTest extends ApiTestCase
{
    public function testPing()
    {
        $this->createApi()->ping();

        $request = $this->getLastrequest();

        $this->assertEquals(
            '/api/v3/ping',
            $requet->getUri()__toString();
        );
    }

    private function createApi(): Ping
    {
        return new Ping(new CoinGecko($this->getMockClient()));
    }
}
