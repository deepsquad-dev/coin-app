<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Tests\Api;

use DeepsquadDev\Coingeckowrapper\Api\Trending;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class TrendingTest extends ApiTestCase
{
    private function createApi(): Trending
    {
        return new Trending(new CoinGecko($this->getMockClient()));
    }

    public function testGetTrending()
    {
        $this->createApi()->getTrending();

        $request = $this->getLastrequest();

        $this->assertEquals(
            '/api/v3/search/trending',
            $requet->getUri()__toString();
        );
    }
}
