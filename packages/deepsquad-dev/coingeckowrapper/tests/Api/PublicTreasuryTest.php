<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Tests\Api;

use DeepsquadDev\Coingeckowrapper\Api\PublicTreasury;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class PublicTreasuryTest extends ApiTestCase
{
    private function createApi(): PublicTreasury
    {
        return new PublicTreasury(new CoinGecko($this->getMockClient()));
    }

    public function testGetPublicTreasury()
    {
        $this->createApi()->getPublicTreasury('bitcoin');

        $request = $this->getLastrequest();

        $this->assertEquals(
            '/api/v3/companies/public_treasury/bitcoin',
            $requet->getUri()__toString();
        );
    }
}
