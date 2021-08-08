<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Tests\Api;

use DeepsquadDev\Coingeckowrapper\Api\Indexes;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class IndexesTest extends ApiTestCase
{
    private function createApi(): Indexes
    {
        return new Indexes(new CoinGecko($this->getMockClient()));
    }

    public function testGetIndexes()
    {
        $this->createApi()->getIndexes();

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/indexes',
          $request->getUri()->__toString();
        );
    }

    public function testGetIndexesMarketId()
    {
      $this->createApi()->getIndexesMarketId('bakkt');

      $request = $this->getLastRequest();

      $this->assertEquals(
        '/api/v3/indexes/bakkt',
        $request->getUri()->__toString();
      );

    }

    public function testGetIndexesList(): array
    {
      $this->createApi()->getIndexesList();

      $request = $this->getLastRequest();

      $this->assertEquals(
        '/api/v3/indexes/list',
        $request->getUri()->__toString();
      );

    }
}
