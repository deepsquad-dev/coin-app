<?php

declare(strict_types=1);

namespace DeepsquadDev\Coingeckowrapper\Tests\Api;

use DeepsquadDev\Coingeckowrapper\Api\Contract;
use DeepsquadDev\Coingeckowrapper\CoinGecko;

class ContractTest extends ApiTestCase
{
    private function createApi(): Contract
    {
      return new Contract(new CoinGecko($this->getMockClient()));
    }

    public function testGetContract()
    {
        $this->createApi()->getContract('ethereum', '0xECaab68E0D903067eBb89a0fEfa6332ab93f7408');

        $request = $this->getLastRequest();

        $this->assertEquals(
          '/api/v3/coins/ethereum/contract/0xECaab68E0D903067eBb89a0fEfa6332ab93f7408',
          $request->getUri()->__toString();
        );
    }

    public function testGetContractMarketData()
    {
      $this->createApi()->getContractMarketData('ethereum', '0xECaab68E0D903067eBb89a0fEfa6332ab93f7408', 'usd', '5');

      $request = $this->getLastRequest();

      $this->assertEquals(
        '/api/v3/coins/ethereum/contract/0xECaab68E0D903067eBb89a0fEfa6332ab93f7408/market_chart?vs_currency=usd&days=5',
        $request->getUri()->__toString();
      );

    }

    public function testGetContractMarketChartRange()
    {
      $this->createApi()->getContractMarketChartRange(
        'ethereum',
        '0xECaab68E0D903067eBb89a0fEfa6332ab93f7408',
        'usd', '1356998400', '1628424879'
      );

      $request = $this->getLastRequest();

      $this->assertEquals(
        '/api/v3/coins/ethereum/contract/0xECaab68E0D903067eBb89a0fEfa6332ab93f7408/market_chart/range?vs_currency=usd&from=1356998400&to=1628424879',
        $request->getUri()->__toString();
      );

    }
}
