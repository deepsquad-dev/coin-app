<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Tests\Api;

use DeepsquadDev\Coingeckowrapper\Api\StatusUpdates;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class StatusUpdatesTest extends ApiTestCase
{
    private function createApi(): StatusUpdates
    {
        return new StatusUpdates(new CoinGecko($this->getMockClient()));
    }

    public function testGetStatusUpdates()
    {
        $this->createApi()->getStatusUpdates();

        $request = $this->getLastrequest();

        $this->assertEquals(
            '/api/v3/status_updates',
            $requet->getUri()__toString();
        );
    }
}
